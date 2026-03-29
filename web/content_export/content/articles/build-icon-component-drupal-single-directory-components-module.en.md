---
type: article
lang: en
draft: true
title: 'Build a icon component with Drupal Single Directory Components module'
slug: build-icon-component-drupal-single-directory-components-module
date: '2024-02-25'
author: xacobe
path: /blog/build-icon-component-drupal-single-directory-components-module
references:
  field_image: 12
promote: true
sticky: false
metatag:
  -
    tag: meta
    attributes:
      name: title
      content: 'Build a icon component with Drupal Single Directory Components module | xacobe.net'
  -
    tag: meta
    attributes:
      name: description
      content: 'Hay un chico nuevo en la ciudad, y promete cambios de como se trabaja el front end en Drupal. Desembarca en el core "Single Directory Components" una aproximación moderna al desarrollo por componentes y atomizado.'
  -
    tag: link
    attributes:
      rel: canonical
      href: 'https://xacobe.net.ddev.site/en/blog/build-icon-component-drupal-single-directory-components-module'
# Drupal
nid: 13
translation_of: true
body_format: full_html
checksum: 3b02d85224d24ee4f74a2324b031c0ebd533686a
---

<p>
  Como librería de iconos usaré <a href="https://icons.getbootstrap.com/">Bootstrap Icons</a>. Podría usar otras librerías (lista de librerías open source) , como <a href="https://simpleicons.org/">Simple Icons</a> disponibles.
</p>
<p>
  Empezamos creando el componente con la ayuda de Drush:
</p>
<pre><code class="language-plaintext">drush generate sdc</code></pre>
<p>
  Le ponemos de nombre Icon y le decimos que si al CSS y creamos un prop llamado "Icon name".
</p>