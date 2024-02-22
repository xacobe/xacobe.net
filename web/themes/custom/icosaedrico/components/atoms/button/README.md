A button that tracks the number of clicks using JavaScript. It also supports an
optional icon right next to the button text.

## Usage
{% include 'icosaedrico:button' with {
      button_tag: "a",
      button_color: "accent",
      button_size: "sm",
      button_text: node.field_project_url.0.title|default('Ver más'),
      button_href: card_button_url,
      button_target: '_blank',
      button_icon: "arrow-right"
    } only %}

## Additional Info
This is not very well suited to map to a _Content Type_. This maps best to a
_field_ that includes a text for the button label.
