import '../../../css/components/buttons.css';
import './button.css';

/**
 * Renders a button based on the same props as button.twig.
 */
function renderButton({ button_tag, button_text, button_href, button_target, button_color, button_size, button_outline, button_shape }) {
  const classes = [
    'btn',
    button_color ? `btn-${button_color}` : '',
    button_size ? `btn-${button_size}` : '',
    button_outline ? 'btn-outline' : '',
    button_shape ? `btn-${button_shape}` : '',
  ].filter(Boolean).join(' ');

  if (button_tag === 'a') {
    return `<a href="${button_href || '#'}" target="${button_target || '_self'}" class="${classes}">${button_text}</a>`;
  }
  return `<button class="${classes}">${button_text}</button>`;
}

export default {
  title: 'Atoms/Button',
  render: (args) => renderButton(args),
  argTypes: {
    button_tag: { control: 'select', options: ['a', 'button'] },
    button_color: { control: 'select', options: ['primary', 'secondary', 'accent', 'neutral', 'ghost', 'link'] },
    button_size: { control: 'select', options: ['', 'lg', 'sm', 'xs', 'wide', 'block'] },
    button_shape: { control: 'select', options: ['', 'square', 'circle'] },
    button_outline: { control: 'boolean' },
    button_text: { control: 'text' },
    button_href: { control: 'text' },
  },
};

export const Primary = {
  args: {
    button_tag: 'a',
    button_text: 'Enviar',
    button_href: '#',
    button_target: '_self',
    button_color: 'primary',
    button_size: '',
    button_shape: '',
    button_outline: false,
  },
};

export const Outline = {
  args: { ...Primary.args, button_outline: true },
};

export const Small = {
  args: { ...Primary.args, button_text: 'Pequeño', button_size: 'sm' },
};

export const Large = {
  args: { ...Primary.args, button_text: 'Grande', button_size: 'lg' },
};
