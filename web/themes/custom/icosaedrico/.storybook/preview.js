import { DocsPage } from './DocsPage.jsx';

/** @type { import('@storybook/server').Preview } */
const preview = {
  parameters: {
    server: {
      url: `${process.env.STORYBOOK_DRUPAL_URL || 'https://xacobe.net.ddev.site'}/storybook/stories/render`,
    },
    docs: {
      page: DocsPage,
    },
  },
};
export default preview;
