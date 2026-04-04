/** @type { import('@storybook/server-webpack5').StorybookConfig } */
const config = {
  stories: [
    "../components/**/*.stories.@(json|yaml|yml)",
    "../docs/**/*.mdx",
  ],
  addons: [
    "@storybook/addon-webpack5-compiler-swc",
    "@storybook/addon-a11y",
    "@storybook/addon-docs",
    {
      name: "storybook-design-token",
      options: {
        designTokenGlob: "css/**/*.css",
      },
    },
  ],
  framework: "@storybook/server-webpack5",
  staticDirs: [{ from: '../.storybook/renders', to: '/renders' }],
  webpackFinal: async (config) => {
    const drupalUrl = process.env.STORYBOOK_DRUPAL_URL || 'https://xacobe.net.ddev.site';
    config.devServer = {
      ...(config.devServer || {}),
      proxy: [
        {
          context: ['/themes', '/sites', '/core', '/modules'],
          target: drupalUrl,
          changeOrigin: true,
          secure: false,
        },
      ],
    };
    return config;
  },
};
export default config;
