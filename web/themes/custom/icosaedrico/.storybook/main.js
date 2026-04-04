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
};
export default config;
