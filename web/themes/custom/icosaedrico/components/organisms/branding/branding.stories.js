import './branding.css';
import logoUrl from '../../../logo.svg';

const SITE_NAME = 'xacobe.net';
const SITE_SLOGAN = 'Diseño & desarrollo web';

function renderBranding({ branding_layout, branding_size, branding_show_logo, branding_show_slogan }) {
  const classes = [
    'branding',
    `branding--${branding_layout || 'horizontal'}`,
    branding_size ? `branding--${branding_size}` : '',
  ].filter(Boolean).join(' ');

  const logo = branding_show_logo
    ? `<a href="/" class="branding__logo" rel="home">
        <img src="${logoUrl}" alt="Home" />
      </a>`
    : '';

  const slogan = branding_show_slogan
    ? `<div class="branding__slogan">
        <span class="branding__slogan--text">${SITE_SLOGAN}</span>
      </div>`
    : '';

  return `
    <div class="${classes}">
      ${logo}
      <div class="branding__text">
        <div class="branding__title">
          <a href="/" rel="home">xacobe.<span class="branding__title--suffix">net</span></a>
        </div>
        ${slogan}
      </div>
    </div>
  `;
}

export default {
  title: 'Organisms/Branding',
  render: (args) => renderBranding(args),
  argTypes: {
    branding_layout: { control: 'radio', options: ['horizontal', 'vertical'] },
    branding_size: { control: 'select', options: ['sm', 'md', 'lg', 'xl'] },
    branding_show_logo: { control: 'boolean' },
    branding_show_slogan: { control: 'boolean' },
  },
};

export const Header = {
  name: 'Header (sm, horizontal)',
  args: {
    branding_layout: 'horizontal',
    branding_size: 'sm',
    branding_show_logo: true,
    branding_show_slogan: false,
  },
};

export const Horizontal = {
  name: 'Horizontal (md)',
  args: {
    branding_layout: 'horizontal',
    branding_size: 'md',
    branding_show_logo: true,
    branding_show_slogan: true,
  },
};

export const Vertical = {
  name: 'Vertical (md)',
  args: {
    branding_layout: 'vertical',
    branding_size: 'md',
    branding_show_logo: true,
    branding_show_slogan: true,
  },
};

export const HeroFrontpage = {
  name: 'Hero frontpage (xl, vertical)',
  args: {
    branding_layout: 'vertical',
    branding_size: 'xl',
    branding_show_logo: true,
    branding_show_slogan: true,
  },
  decorators: [
    (story) => `<div style="min-height: 60dvh; display: flex; align-items: center; justify-content: center;">${story()}</div>`,
  ],
};

export const NoLogo = {
  name: 'Sin logo',
  args: {
    branding_layout: 'horizontal',
    branding_size: 'md',
    branding_show_logo: false,
    branding_show_slogan: false,
  },
};
