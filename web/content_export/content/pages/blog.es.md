---
type: page
lang: es
draft: false
title: Blog
slug: blog
date: '2024-06-29'
author: xacobe
path: /blog
promote: false
sticky: false
metatag:
  -
    tag: meta
    attributes:
      name: title
      content: 'Blog | xacobe.net'
  -
    tag: link
    attributes:
      rel: canonical
      href: 'https://xacobe.net.ddev.site/es/blog'
layout_builder__layout:
  -
    layout_id: layout_onecol
    layout_settings:
      label: ''
    components:
      36b5f972-4ec1-4d0f-9952-30cac2f0befc:
        region: content
        configuration:
          id: 'field_block:node:page:body'
          label_display: '0'
          context_mapping:
            entity: layout_builder.entity
          formatter:
            type: text_default
            label: hidden
            settings: {  }
        weight: 0
      de418100-43fd-41e1-8507-6f06bce01922:
        region: content
        configuration:
          id: 'extra_field_block:node:page:links'
          label_display: '0'
          context_mapping:
            entity: layout_builder.entity
        weight: 1
      c817d938-f0fe-4515-8809-8bb1fa8f2b5f:
        region: content
        configuration:
          id: 'field_block:node:page:field_paragraph'
          label_display: '0'
          context_mapping:
            entity: layout_builder.entity
          formatter:
            type: entity_reference_revisions_entity_view
            label: above
            settings:
              view_mode: default
              link: ''
        weight: 2
      c7cbbab5-b753-4cf9-ba41-fa8b6d78bbbe:
        region: content
        configuration:
          id: 'views_block:blog-blog_block_list'
          label: ''
          label_display: 0
          provider: views
          views_label: ''
          items_per_page: none
          context_mapping: {  }
        weight: 3
# Drupal
nid: 18
translation_of: null
checksum: d529a827cb8b3e14932b234a1b8a72a0f99756bb
---

