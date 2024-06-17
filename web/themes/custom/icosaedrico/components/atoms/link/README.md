# Link

This is some default content for the README. Change this to the appropriate
content.

## Usage

{% embed 'icosaedrico:link' with {
  href: item.url,
  classes: "menu-link-icon"
} %}
  {% block link_content %}
    {% include "icosaedrico:icon" with {
      icon_name: icon,
      icon_svg_classes: "bg-red",
      icon_svg_size: "32",
      icon_svg_fill: "black"
    } only %}
  {% endblock %}
{% endembed %}


## Additional information

Some extra info about the component.
