# Site Footer

Componente organism que combina el doodle decorativo, información de branding y copyright. Es el footer completo del sitio.

## Descripción

Este es el componente principal del footer. Integra múltiples elementos en una estructura responsiva y flexible.

## Componentes incluidos

- **Footer Doodle**: SVG decorativo con futuros elementos temáticos
- **Branding**: Logo e información del sitio (incrustada)
- **Copyright**: Texto de derechos de autor con año dinámico (incrustada)

## Props

| Prop | Tipo | Por defecto | Requerido | Descripción |
|------|------|-------------|-----------|-------------|
| `show_doodle` | boolean | `true` | No | Mostrar/ocultar el doodle decorativo |
| `site_name` | string | `''` | No | Nombre/URL del sitio |
| `logo_url` | string | `''` | No | URL de la imagen del logo |
| `logo_alt` | string | `'Logo'` | No | Texto alternativo del logo |
| `copyright_start_year` | string | `'2006'` | Sí | Año de inicio del copyright |
| `copyright_end_year` | string | `null` | No | Año final (se actualiza automáticamente vía JS) |

## Uso en Twig

Uso completo:

```twig
{% include 'icosaedrico:site-footer' with {
  show_doodle: true,
  site_name: 'www.xacobe.net',
  logo_url: '/themes/custom/icosaedrico/logo_old.png',
  logo_alt: 'Logo xacobe',
  copyright_start_year: '2006',
  copyright_end_year: '2026'
} %}
```

Uso mínimo (solo doodle y copyright):

```twig
{% include 'icosaedrico:site-footer' with {
  show_doodle: true,
  copyright_start_year: '2006'
} %}
```

Sin doodle:

```twig
{% include 'icosaedrico:site-footer' with {
  show_doodle: false,
  site_name: 'www.xacobe.net',
  logo_url: '/themes/custom/icosaedrico/logo_old.png',
  copyright_start_year: '2006'
} %}
```

## HTML generado

Ejemplo con todos los elementos:

```html
<footer class="site-footer" role="contentinfo">
  <!-- Doodle SVG -->
  <div class="footer-doodle">
    <svg class="illas-cies max-w-screen-sm" viewBox="0 0 901.65428 91.690674">
      <!-- SVG paths -->
    </svg>
  </div>

  <!-- Branding -->
  <aside class="footer-branding">
    <div class="footer-branding__inner">
      <a href="/" class="footer-branding__logo-link">
        <img src="/logo_old.png" alt="Logo xacobe" class="footer-branding__logo">
      </a>
      <div class="footer-branding__content">
        <p class="footer-branding__name">www.xacobe.net</p>
      </div>
    </div>
  </aside>

  <!-- Copyright -->
  <aside class="footer-copyright">
    <p class="footer-copyright__text">
      Copyright © <span class="footer-copyright__year">2006</span>-<span class="footer-copyright__year">2026</span> xacobe.net. Todos los derechos reservados.
    </p>
  </aside>
</footer>
```

## CSS

Clases principales:

- `.site-footer` - Contenedor principal
- `.footer-doodle` - Contenedor del SVG
- `.footer-branding` - Sección de branding
- `.footer-copyright` - Sección de copyright
- Clases Tailwind para espaciado y responsive

## Características especiales

### ✨ Año de copyright dinámico

El componente incluye JavaScript que actualiza automáticamente el año final del copyright al año actual. **No necesitas actualizar manualmente cada año.**

El script:
1. Busca todos los elementos con clase `.footer-copyright__year`
2. Actualiza el último con el año actual
3. Se ejecuta al cargar la página

### 📱 Responsive

El footer es completamente responsivo:
- En mobile: elementos apilados verticalmente
- En desktop: layout optimizado
- El doodle se redimensiona con `max-w-screen-sm` y `max-w-xs`

## JavaScript

**Archivo**: `site-footer.js`

```javascript
// Auto-actualiza el año del copyright
document.addEventListener('DOMContentLoaded', function() {
  const yearElements = document.querySelectorAll('.footer-copyright__year');
  if (yearElements.length > 0) {
    const currentYear = new Date().getFullYear();
    yearElements[yearElements.length - 1].textContent = currentYear;
  }
});
```
