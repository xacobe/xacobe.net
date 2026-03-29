---
type: page
lang: es
draft: false
title: Inicio
slug: node-1
date: '2024-01-21'
author: xacobe
path: /node/1
promote: false
sticky: false
metatag:
  -
    tag: meta
    attributes:
      name: title
      content: 'Inicio | xacobe.net'
  -
    tag: link
    attributes:
      rel: canonical
      href: 'https://xacobe.net.ddev.site/es/node/1'
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
        weight: 2
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
        weight: 4
      7aedaa2b-306b-45be-9afd-3bc3dcb9fa90:
        region: content
        configuration:
          id: system_branding_block
          label: 'Site branding'
          label_display: 0
          label_display_type: '0'
          provider: system
          use_site_logo: 1
          use_site_name: 1
          use_site_slogan: 1
          context_mapping: {  }
        weight: 3
        additional:
          component_attributes:
            block_attributes:
              id: ''
              class: 'justify-center branding--vertical flex-col'
              style: ''
              data: ''
            block_title_attributes:
              id: ''
              class: ''
              style: ''
              data: ''
            block_content_attributes:
              id: ''
              class: ''
              style: ''
              data: ''
      b1f02daa-b301-44c9-a415-b6cd3e0f75b8:
        region: content
        configuration:
          id: 'block_content:a0cf6dfa-371a-42f3-bd78-31dde3f1c965'
          label: 'Tech stack'
          label_display: 0
          label_display_type: '0'
          provider: block_content
          status: true
          info: ''
          view_mode: full
          context_mapping: {  }
        weight: 5
        additional:
          component_attributes:
            block_attributes:
              id: ''
              class: 'flex container max-w-prose justify-around'
              style: ''
              data: ''
            block_title_attributes:
              id: ''
              class: ''
              style: ''
              data: ''
            block_content_attributes:
              id: ''
              class: ''
              style: ''
              data: ''
      de418100-43fd-41e1-8507-6f06bce01922:
        region: content
        configuration:
          id: 'extra_field_block:node:page:links'
          label_display: '0'
          context_mapping:
            entity: layout_builder.entity
        weight: 1
# Drupal
nid: 1
translation_of: null
checksum: 3a10ae8f94019fadf5eccca3b21de74e20dfdd30
---

