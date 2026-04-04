# Title

Componente de título de página con diseño decorativo. Incluye divisores horizontales a ambos lados del texto para una presentación visual distinctive.

## Usage

Este componente se utiliza para renderizar títulos principales en páginas, con soporte para diferentes niveles de encabezado (h1 a h6).

```twig
{% include "icosaedrico:title" with {
  title: "Mi Título",
  title_tag: "h1",
} %}
```

## Props

- **title** (string, requerido): El texto del título a mostrar.
- **title_tag** (string, default: "h1"): Etiqueta HTML semántica a utilizar (h1, h2, h3, h4, h5, h6).
- **title_classes** (string, optional): Clases CSS adicionales a aplicar al título.
- **attributes** (Drupal Attributes, optional): Atributos adicionales del wrapper.

## Variantes

El componente soporta todos los niveles de encabezado estándar (h1-h6) para mantener la semántica correcta del HTML mientras se utiliza el mismo estilo visual.

## Storybook

Las historias de Storybook están disponibles en `atoms/title` y muestran diferentes variantes del componente con ejemplos prácticos.

