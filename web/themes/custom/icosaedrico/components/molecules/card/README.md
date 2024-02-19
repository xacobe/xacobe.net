# Card

https://daisyui.com/components/card/

## Usage

{% embed 'icosaedrico:card' with {
  card_title: label,
  card_image_position: "left",
  card_button_url: node.field_project_url.0.uri|default('/')
} %}
 {% block card_media %}
    {{ content.field_project_images }}
  {% endblock %}

  {% block card_content %}
    {% for tech_tag in tech_tags %}
      {% include 'icosaedrico:badge' with {
        badge_text: tech_tag,
        badge_href: card_button_url,
        badge_target: '_blank',
        badge_color: 'primary',
        badge_size: 'sm'
      } only %}
    {% endfor %}

    {% include 'icosaedrico:button' with {
      button_tag: "a",
      button_color: "accent",
      button_size: "sm",
      button_text: node.field_project_url.0.title|default('Ver más'),
      button_href: card_button_url,
      button_target: '_blank',
      button_icon: "arrow-right"
    } only %}
    {{ content.body }}
  {% endblock %}
{% endembed %}

## Additional information

Some extra info about the component.
