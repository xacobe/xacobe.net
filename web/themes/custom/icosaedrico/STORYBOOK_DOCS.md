# 📚 Documentación de Componentes - Storybook

Este archivo sirve como **guía de referencia rápida** para los componentes del sistema de diseño.

⚠️ **Nota**: El módulo Storybook de Drupal no soporta paneles de documentación HTML integrados como Storybook estándar. Para ver documentación detallada, consulta los archivos incluidos en cada directorio de componente.

---

## 📍 Componentes disponibles

### Molecules
- **Footer Doodle** - Elemento decorativo SVG
  - 📖 Ver documentación: `components/molecules/footer-doodle/DOCUMENTATION.md`
  - 📖 Ver README: `components/molecules/footer-doodle/README.md`

### Organisms
- **Site Footer** - Footer completo del sitio
  - 📖 Ver documentación: `components/organisms/site-footer/DOCUMENTATION.md`
  - 📖 Ver README: `components/organisms/site-footer/README.md`

- **Branding** - Logo y nombre del sitio
  - 📖 Ver README: `components/organisms/branding/README.md`

---

## 🎬 Cómo usar Storybook

1. **Inicia Storybook**:
   ```bash
   cd web/themes/custom/icosaedrico
   npm run storybook
   ```

2. **Abre en el navegador**: `http://localhost:6006`

3. **Navega por los componentes** en el panel izquierdo

4. **Prueba variantes** seleccionando diferentes stories

5. **Modifica props** en el panel inferior para ver cambios en tiempo real

---

## 📖 Acceder a la documentación detallada

Cada componente tiene:

1. **DOCUMENTATION.md** - Documentación completa
   - Descripción detallada
   - Props documentados
   - Ejemplos de código Twig
   - HTML generado
   - CSS classes
   - Características especiales
   - Integración

2. **README.md** - Descripción breve
   - Uso rápido
   - Propósito del componente

### Estructura de directorios:

```
components/
├── molecules/
│   └── footer-doodle/
│       ├── DOCUMENTATION.md    ← Lee aquí
│       ├── README.md
│       ├── footer-doodle.component.yml
│       ├── footer-doodle.twig
│       ├── footer-doodle.css
│       └── footer-doodle.stories.twig
└── organisms/
    ├── branding/
    │   └── README.md
    └── site-footer/
        ├── DOCUMENTATION.md    ← Lee aquí
        ├── README.md
        ├── site-footer.component.yml
        ├── site-footer.twig
        ├── site-footer.css
        ├── site-footer.js
        └── site-footer.stories.twig
```

---

## 🧩 Footer Doodle

### Descripción
Elemento decorativo SVG que muestra un doodle de illas/costas. Soportará futuras características como sol/luna temático y nubes animadas.

### Props rápidos
- `doodle_class` (string) - Clases CSS adicionales

### Uso rápido
```twig
{% include 'icosaedrico:footer-doodle' %}
```

### 📖 Documentación completa
👉 `components/molecules/footer-doodle/DOCUMENTATION.md`

---

## 🎯 Site Footer

### Descripción
Footer completo que combina doodle decorativo, branding (logo + nombre) y copyright dinámico.

### Props rápidos
| Prop | Tipo | Por defecto |
|------|------|-------------|
| `show_doodle` | boolean | `true` |
| `site_name` | string | `''` |
| `logo_url` | string | `''` |
| `copyright_start_year` | string | `'2006'` |

### Uso rápido
```twig
{% include 'icosaedrico:site-footer' with {
  show_doodle: true,
  site_name: 'www.xacobe.net',
  logo_url: '/path/to/logo.png',
  copyright_start_year: '2006'
} %}
```

### 🎨 Variantes en Storybook
1. **Complete Footer** - Con doodle, branding y copyright
2. **Without Doodle** - Sin doodle
3. **Minimal** - Solo doodle y copyright

### ✨ Características especiales
- ✅ Año de copyright auto-actualizado (JS)
- ✅ Completamente responsivo
- ✅ Accesible (ARIA)

### 📖 Documentación completa
👉 `components/organisms/site-footer/DOCUMENTATION.md`

---

## 🔍 Debugging y Tips

### Ver los JSONs generados
```bash
cat components/molecules/footer-doodle/footer-doodle.stories.json
cat components/organisms/site-footer/site-footer.stories.json
```

### Regenerar JSONs después de cambios
```bash
cd /ruta/a/drupal/root
drush storybook:generate-all-stories
```

### Ver logs de Storybook
```bash
tail -f debug-storybook.log
```

### Limpiar caché de Storybook
```bash
rm -rf node_modules/.cache/storybook
npm run storybook
```

---

## 📋 Checklist de documentación

Cada componente debe tener:

- ✅ `component.yml` - Schema y configuración
- ✅ `.twig` template - HTML
- ✅ `.css` - Estilos
- ✅ `.stories.twig` - Stories para Storybook
- ✅ `.stories.json` - Generado automáticamente
- ✅ `README.md` - Descripción breve
- ✅ `DOCUMENTATION.md` - Documentación completa

---

## 🚀 Próximos pasos

- [ ] Agregar más componentes al sistema de diseño
- [ ] Expandir el doodle con elementos temáticos (sol/luna)
- [ ] Agregar nubes animadas
- [ ] Documentar footer-copyright como componente separado
- [ ] Crear guía de accesibilidad

---

**Última actualización**: Abril 2026  
**Versión**: 1.0.0  
**Módulo**: Drupal 11 SDC + Storybook Server
