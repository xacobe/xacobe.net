/** @type { import('@storybook/server').Preview } */
const preview = {
  parameters: {
    server: {
      url: `${process.env.STORYBOOK_DRUPAL_URL || 'https://xacobe.net.ddev.site'}/storybook/stories/render`,
    },
  },
};
export default preview;
