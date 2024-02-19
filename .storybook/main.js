/** @type { import('@storybook/server-webpack5').StorybookConfig } */
const config = {
  stories: ["../web/**/*.mdx", "../web/**/*.stories.@(json|yaml|yml)"],
  addons: ["@storybook/addon-links", "@storybook/addon-essentials"],
  framework: {
    name: "@storybook/server-webpack5",
    options: {
      builder: {
        useSWC: true,
      },
    },
  },
  docs: {
    autodocs: "tag",
  },
};
export default config;
