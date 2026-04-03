/** @type { import('@storybook/server').Preview } */
const preview = {
  parameters: {
    server: {
      url: `${process.env.STORYBOOK_DRUPAL_URL}/storybook/stories/render`,
    },
  },
};
export default preview;
