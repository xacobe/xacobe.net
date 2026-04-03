# Site Footer - Documentación

## 📝 Descripción

Footer completo del sitio que combina el doodle decorativo, información de branding (logo y nombre) y copyright. Soporta diferentes configuraciones para mostrar/ocultar elementos según necesidad.

## 📋 Props

| Prop | Tipo | Por defecto | Requerido | Descripción |
|------|------|-------------|-----------|-------------|
| `show_doodle` | boolean | `true` | No | Mostrar/ocultar el doodle decorativo |
| `site_name` | string | `''` | No | Nombre/URL del sitio |
| `logo_url` | string | `''` | No | URL de la imagen del logo |
| `logo_alt` | string | `'Logo'` | No | Texto alternativo del logo |
| `copyright_start_year` | string | `'2006'` | Sí | Año de inicio del copyright |
| `copyright_end_year` | string | `null` | No | Año final (se actualiza automáticamente vía JS) |

## 💻 Ejemplos de código

### Uso completo con todos los elementos

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

### Uso mínimo (solo doodle y copyright)

```twig
{% include 'icosaedrico:site-footer' with {
  show_doodle: true,
  copyright_start_year: '2006'
} %}
```

### Sin doodle decorativo

```twig
{% include 'icosaedrico:site-footer' with {
  show_doodle: false,
  site_name: 'www.xacobe.net',
  logo_url: '/themes/custom/icosaedrico/logo_old.png',
  copyright_start_year: '2006'
} %}
```

### En page.html.twig (integración real)

```twig
{% include 'icosaedrico:site-footer' with {
  show_doodle: true,
  site_name: 'www.xacobe.net',
  logo_url: path('frontpage') ~ 'themes/custom/icosaedrico/logo_old.png',
  logo_alt: 'Logo xacobe',
  copyright_start_year: '2006'
} %}
```

## 🎨 HTML generado

### Estructura HTML completa

```html
<footer class="site-footer" role="contentinfo">
  <!-- 1. Doodle SVG (si show_doodle = true) -->
  <div class="footer-doodle">
    <svg class="illas-cies max-w-screen-sm" viewBox="0 0 901.65428 91.690674">
      <defs>
        <filter id="a" color-interpolation-filters="sRGB">
          <feGaussianBlur stdDeviation="2.371"></feGaussianBlur>
        </filter>
      </defs>
      <path d="M5.913 25.828c..." opacity="0.656"></path>
    </svg>
  </div>

  <!-- 2. Branding (si site_name o logo_url están presentes) -->
  <aside class="footer-branding">
    <div class="footer-branding__inner">
      <!-- Logo -->
      <a href="/" class="footer-branding__logo-link">
        <img 
          src="/logo_old.png" 
          alt="Logo xacobe" 
          class="footer-branding__logo"
        >
      </a>
      
      <!-- Nombre del sitio -->
      <div class="footer-branding__content">
        <p class="footer-branding__name">www.xacobe.net</p>
      </div>
    </div>
  </aside>

  <!-- 3. Copyright -->
  <aside class="footer-copyright">
    <p class="footer-copyright__text">
      Copyright © <span class="footer-copyright__year">2006</span>-<span class="footer-copyright__year">2026</span> xacobe.net. Todos los derechos reservados.
    </p>
  </aside>
</footer>
```

### Estructura sin branding

```html
<footer class="site-footer" role="contentinfo">
  <div class="footer-doodle">
    <svg class="illas-cies max-w-screen-sm" viewBox="...">...</svg>
  </div>
  
  <aside class="footer-copyright">
    <p class="footer-copyright__text">
      Copyright © <span class="footer-copyright__year">2006</span>-<span class="footer-copyright__year">2026</span> xacobe.net. Todos los derechos reservados.
    </p>
  </aside>
</footer>
```

## 🎯 CSS Classes

Estructura BEM para CSS:

```
.site-footer                   // Footer principal
├── .footer-doodle            // Contenedor del SVG
├── .footer-branding          // Sección de branding
│   ├── .footer-branding__inner
│   ├── .footer-branding__logo-link
│   ├── .footer-branding__logo
│   └── .footer-branding__content
│       └── .footer-branding__name
└── .footer-copyright          // Sección de copyright
    ├── .footer-copyright__text
    └── .footer-copyright__year (aparece 2 veces)
```

## 📱 Responsive

El footer es completamente responsivo:

- **Mobile**: Elementos apilados verticalmente
- **Tablet**: Layout optimizado con spacing adecuado
- **Desktop**: Full-width con espaciado generoso
- El SVG del doodle se redimensiona automáticamente con Tailwind

## ✨ Características especiales

### Año de copyright dinámico

El componente incluye **JavaScript (`site-footer.js`) que actualiza automáticamente el año final del copyright al año actual.**

**No necesitas actualizar manualmente cada año.**

#### Cómo funciona:

```javascript
// site-footer.js
document.addEventListener('DOMContentLoaded', function() {
  // Busca todos los spans con clase .footer-copyright__year
  const yearElements = document.querySelectorAll('.footer-copyright__year');
  
  if (yearElements.length > 0) {
    // Obtiene el año actual
    const currentYear = new Date().getFullYear();
    
    // Actualiza el ÚLTIMO año (el final)
    yearElements[yearElements.length - 1].textContent = currentYear;
  }
});
```

#### Ejemplo:

- Si pasas: `copyright_end_year: '2024'`
- El JS actualiza a: `2025` (año actual en 2025)
- El usuario ve: "Copyright © 2006-2025 xacobe.net"

### Accesibilidad

- `role="contentinfo"` en el footer semántico (ARIA)
- `alt` text correcto en logo
- Contraste de colores adecuado
- Estructura semántica correcta

## 🎬 Variantes en Storybook

### 1. Complete Footer
Muestra todos los elementos: doodle, branding y copyright.
- **Cuándo usarla**: Sitios con identidad visual completa
- **Props**: show_doodle=true, site_name, logo_url

### 2. Without Doodle
Footer sin el doodle decorativo.
- **Cuándo usarla**: Cuando quieres un footer minimalista
- **Props**: show_doodle=false, branding y copyright

### 3. Minimal
Solo doodle y copyright sin branding.
- **Cuándo usarla**: Cuando el branding está en otra parte
- **Props**: show_doodle=true, site_name='', logo_url=''

## 📍 Ubicación de archivos

```
themes/custom/icosaedrico/components/organisms/site-footer/
├── site-footer.component.yml     // Schema y config
├── site-footer.twig              // Template principal
├── site-footer.css               // Estilos
├── site-footer.js                // JavaScript (copyright dinámico)
├── site-footer.stories.twig      // Historias para Storybook
├── site-footer.stories.json      // Generated by Drupal
├── README.md                      // Documentación breve
└── DOCUMENTATION.md              // Este archivo
```

## 🔗 Integración en Drupal

**Archivo**: `templates/layouts/page.html.twig`

```twig
<!-- Footer del sitio -->
{% include 'icosaedrico:site-footer' with {
  show_doodle: true,
  site_name: 'www.xacobe.net',
  logo_url: path('frontpage') ~ 'themes/custom/icosaedrico/logo_old.png',
  logo_alt: 'Logo xacobe',
  copyright_start_year: '2006'
} %}
```

## 🧩 Componentes anidados

Este componente incluye:
- **Footer Doodle** (SDC component) - El SVG decorativo
- **Footer Branding** (inline) - Logo y nombre
- **Footer Copyright** (inline) - Año de copyright dinámico

---

**Última actualización**: Abril 2026
**Versión**: 1.0.0
**Módulo**: Drupal 11 SDC
**Framework CSS**: Tailwind CSS
