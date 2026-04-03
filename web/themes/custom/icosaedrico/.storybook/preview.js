// Google Fonts — loaded in html.html.twig in Drupal, must be explicit here
import '@fontsource/lobster';
import '@fontsource/reem-kufi/400.css';
import '@fontsource/reem-kufi/700.css';
import '@fontsource/open-sans/300.css';
import '@fontsource/open-sans/400.css';
import '@fontsource/open-sans/700.css';

import '../css/base/normalize.css';
import '../css/base/tokens.css';
import '../css/base/base.css';
import '../css/utilities/layout.css';
import '../css/utilities/spacing.css';
import '../css/utilities/typography.css';

/** @type { import('@storybook/html').Preview } */
const preview = {
  parameters: {
    drupal: {
      baseURL: 'https://xacobe.net.ddev.site',
    },
    controls: {
      matchers: {
        color: /(background|color)$/i,
        date: /Date$/i,
      },
    },
    a11y: {
      test: 'todo',
    },
  },
};

export default preview;
