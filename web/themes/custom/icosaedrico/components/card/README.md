# Card

This is some default content for the README. Change this to the appropriate
content.

## Usage

{% embed 'icosaedrico:card' with {
  title: label,
  image_position: "left",
  button_url: node.field_project_url.0.uri|default('/')
} %}
 {% block media %}
    {{ content.field_project_images }}
  {% endblock %}

  {% block content %}
    {% for tech_tag in tech_tags %}
      {% include 'icosaedrico:badge' with {
        badge_text: tech_tag,
        badge_href: button_url,
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
      button_href: button_url,
      button_target: '_blank',
      button_icon: "arrow-right"
    } only %}
    {{ content.body }}
  {% endblock %}
{% endembed %}

## Additional information

Some extra info about the component.
