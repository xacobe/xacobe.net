# Footer Doodle

Componente decorativo SVG que muestra un doodle de illas/costas. Elemento visual para el footer que puede extenderse con características futuras como sol/luna (según tema) y nubes animadas.

## Descripción

Este componente renderiza un SVG decorativo que agrega carácter visual al footer. Está diseñado para ser flexible y permitir futuras expansiones.

## Props

- **doodle_class** (string, opcional): Clases CSS adicionales para el SVG. Por defecto: `illas-cies max-w-screen-sm`

## Uso en Twig

Uso básico:

```twig
{% include 'icosaedrico:footer-doodle' %}
```

Con clases personalizadas:

```twig
{% include 'icosaedrico:footer-doodle' with {
  doodle_class: 'illas-cies max-w-screen-sm'
} %}
```

## HTML generado

```html
<div class="footer-doodle">
  <svg class="illas-cies max-w-screen-sm" viewBox="0 0 901.65428 91.690674">
    <!-- SVG paths del doodle -->
  </svg>
</div>
```

## CSS

El componente usa las siguientes clases:

- `.footer-doodle` - Contenedor wrapper del SVG
- `.illas-cies` - SVG decorativo (ancho máximo responsivo)
- Clases Tailwind: `max-w-screen-sm`, `max-w-xs` para variantes de tamaño

## Características futuras

- ☀️ Sol/Luna según tema oscuro/claro
- ☁️ Nubes animadas
- 🌊 Elementos decorativos adicionales
