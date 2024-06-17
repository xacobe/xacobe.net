# Dropdown

This is some default content for the README. Change this to the appropriate
content.

## Usage

{% embed 'icosaedrico:dropdown' with {
    dropdown_details_tag: true,
    } %}

    {% block dropdown_content %}
      {{ item.link }}
    {% endblock %}

  {% endembed %}

## Additional information

Some extra info about the component.
