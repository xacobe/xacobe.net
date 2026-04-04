import { addons } from 'storybook/internal/preview-api';
import { DocsPage } from './DocsPage.jsx';

const SNIPPET_RENDERED = 'storybook/docs/snippet-rendered';

function extractComponentHtml(fullHtml) {
  const doc = new DOMParser().parseFromString(fullHtml, 'text/html');
  const wrapper = doc.getElementById('___storybook_wrapper');
  if (!wrapper) return fullHtml;

  // Remove script tags and Drupal settings JSON
  wrapper.querySelectorAll('script').forEach(el => el.remove());

  // Remove HTML comment nodes (Drupal theme debug)
  const walker = doc.createTreeWalker(wrapper, NodeFilter.SHOW_COMMENT);
  const comments = [];
  while (walker.nextNode()) comments.push(walker.currentNode);
  comments.forEach(c => c.remove());

  return wrapper.innerHTML.trim();
}

async function fetchStoryHtml(url, path, params, storyContext) {
  // Static mode: serve pre-rendered HTML snapshots (no Drupal server needed).
  if (process.env.STORYBOOK_STATIC === 'true') {
    const res = await fetch(`/renders/${storyContext.id}.html`);
    return res.text();
  }

  const fetchUrl = new URL(`${url}/${path}`);
  fetchUrl.search = new URLSearchParams({
    ...storyContext.globals,
    ...params,
    _sb: Date.now(),
  }).toString();
  const response = await fetch(fetchUrl, { cache: 'no-store' });
  const html = await response.text();

  // Emit only the component HTML (not the full Drupal page) for "Show code"
  if (!storyContext.parameters?.docs?.source?.code) {
    try {
      const channel = addons.getChannel();
      const source = extractComponentHtml(html);
      channel.emit(SNIPPET_RENDERED, { id: storyContext.id, source, args: storyContext.args });
    } catch (_) {
      // Channel not available outside story context (e.g. during static build)
    }
  }

  return html;
}

/** @type { import('@storybook/server').Preview } */
const preview = {
  parameters: {
    server: {
      url: `${process.env.STORYBOOK_DRUPAL_URL || 'https://xacobe.net.ddev.site'}/storybook/stories/render`,
      fetchStoryHtml,
    },
    docs: {
      page: DocsPage,
    },
    options: {
      storySort: {
        order: ['Tokens', ['Primitives', 'Semantics'], 'Atoms', 'Molecules', 'Organisms', 'Templates', '*'],
      },
    },
  },
};
export default preview;
