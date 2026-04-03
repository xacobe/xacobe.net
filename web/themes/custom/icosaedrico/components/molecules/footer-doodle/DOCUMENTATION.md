# Footer Doodle - Documentación

## 📝 Descripción

Elemento decorativo SVG que aparece en el footer. Muestra un doodle de illas/costas con diferentes tamaños. En el futuro soportará variantes de tema (día/noche) y elementos animados como nubes.

## 📋 Props

| Prop | Tipo | Por defecto | Descripción |
|------|------|-------------|-------------|
| `doodle_class` | string | `'illas-cies max-w-screen-sm'` | Clases CSS adicionales para el SVG |

## 💻 Ejemplos de código

### Uso básico

```twig
{% include 'icosaedrico:footer-doodle' %}
```

### Con clases personalizadas

```twig
{% include 'icosaedrico:footer-doodle' with {
  doodle_class: 'illas-cies max-w-xs'
} %}
```

## 🎨 HTML generado

### Estructura HTML

```html
<div class="footer-doodle">
  <svg class="illas-cies max-w-screen-sm" viewBox="0 0 901.65428 91.690674">
    <defs>
      <filter id="a" color-interpolation-filters="sRGB">
        <feGaussianBlur stdDeviation="2.371"></feGaussianBlur>
      </filter>
    </defs>
    <path d="M5.913 25.828c..." opacity="0.656"></path>
    <path d="M-139.2 347.097c..." opacity="0.656"></path>
  </svg>
</div>
```

## 🎯 CSS Classes

- `.footer-doodle` - Contenedor wrapper del SVG
- `.illas-cies` - SVG decorativo (clases aplicadas aquí)
- `.max-w-screen-sm` - Ancho máximo estándar (Tailwind)
- `.max-w-xs` - Ancho máximo compacto (Tailwind)

## 📱 Responsive

El SVG es completamente responsivo gracias a:
- `viewBox` permite escalado proporcional
- Clases Tailwind `max-w-*` controlan el ancho máximo
- Se adapta automáticamente a diferentes dispositivos

## 🚀 Características futuras

- ☀️ Sol/Luna según tema oscuro/claro
- ☁️ Nubes animadas
- 🌊 Elementos decorativos adicionales

## 📍 Ubicación

- **Componente**: `themes/custom/icosaedrico/components/molecules/footer-doodle/`
- **Template**: `footer-doodle.twig`
- **Estilos**: `footer-doodle.css`
- **Schema**: `footer-doodle.component.yml`

## 🔗 Ver en Storybook

En Storybook, este componente tiene dos variantes:
1. **Default** - Tamaño estándar para footer (max-w-screen-sm)
2. **Compact Size** - Versión compacta para espacios reducidos (max-w-xs)
