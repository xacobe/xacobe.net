import { DocsPage } from './DocsPage.jsx';

async function fetchStoryHtml(url, path, params, storyContext) {
  const fetchUrl = new URL(`${url}/${path}`);
  fetchUrl.search = new URLSearchParams({
    ...storyContext.globals,
    ...params,
    _sb: Date.now(),
  }).toString();
  const response = await fetch(fetchUrl, { cache: 'no-store' });
  return response.text();
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
  },
};
export default preview;
