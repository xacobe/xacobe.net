---
type: article
lang: es
draft: true
title: 'Hacer un componente para iconos con Single Directory Components en Drupal'
slug: hacer-un-componente-para-iconos-con-single-directory-components-en-drupal
date: '2024-02-19'
author: xacobe
path: /blog/hacer-un-componente-para-iconos-con-single-directory-components-en-drupal
references:
  field_image: 12
promote: true
sticky: false
metatag:
  -
    tag: meta
    attributes:
      name: title
      content: 'Hacer un componente para iconos con Single Directory Components en Drupal | xacobe.net'
  -
    tag: meta
    attributes:
      name: description
      content: 'Hay un chico nuevo en la ciudad, y promete cambios de como se trabaja el front end en Drupal. Desembarca en el core "Single Directory Components" una aproximación moderna al desarrollo por componentes y atomizado.'
  -
    tag: link
    attributes:
      rel: canonical
      href: 'https://xacobe.net.ddev.site/es/blog/hacer-un-componente-para-iconos-con-single-directory-components-en-drupal'
# Drupal
nid: 13
translation_of: null
body_format: full_html
checksum: 0677e6b6eee7cf86548cef13cfa297cdf05df781
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
<p>
  &nbsp;
</p>
<p>
  Algunas cosas a considerar
</p>
<p>
  Notas tomadas de <a href="https://www.drupal.org/project/drupal/issues/3414981">https://www.drupal.org/project/drupal/issues/3414981</a>
</p>
<h3>
  Add missing attributes objects in templates
</h3>
<p>
  <strong>Default attributes object is always injected in template</strong> and expected for alteration (adding contextual accessibility attributes, adding data for site building tools, style overrides of the component...)
</p>
<p>
  Se define como prop y asigna de la siguiente manera:
</p>
<pre class="code highlight" lang="yaml"><span class="hljs-attr">props:</span>
<span class="">  </span><span class="hljs-attr">type:</span><span class=""> </span><span class="hljs-string">object</span>
<span class="">  </span><span class="hljs-attr">properties:</span>
<span class="">    </span><span class="hljs-attr">attributes:</span>
<span class="">      </span><span class="hljs-attr">type:</span><span class=""> </span><span class="hljs-string">Drupal\Core\Template\Attribute</span>
<span class="">      </span><span class="hljs-attr">title:</span><span class=""> </span><span class="hljs-string">Attributes</span>
<span class="">      </span><span class="hljs-attr">description:</span><span class=""> </span><span class="hljs-string">Wrapper</span><span class=""> </span><span class="hljs-string">attributes.</span>
</pre>
<p>
  Luego en nuestra plantilla:
</p>
<p>
  <code><span class="hljs-language:xml">&lt;div</span><span class="hljs-template-variable">{{ attributes.addClass(</span><span class="hljs-template-variable hljs-string">'branding'</span><span class="hljs-template-variable">) }}</span><span class="hljs-language:xml">&gt;</span></code><span class="hljs-language:xml">&nbsp;</span>
</p>
<p>
  &nbsp;
</p>
<h3>
  Add missing slots or props
</h3>
<p>
  <strong>Every slot or prop</strong> from the component definition <strong>must be used in templates</strong>. <strong>Every slot or prop</strong> used in the template must be <strong>present in the component definition</strong> (except the mandatory default ones: attributes, componentMetadata...)
</p>
<p>
  &nbsp;
</p>