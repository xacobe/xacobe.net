# Icosaedrico — Drupal theme

Tema personalizado para **xacobe.net**. Construido sobre Drupal 11 con SDC (Single Directory Components), CSS personalizado con design tokens y Storybook para la documentación de componentes.

---

## Stack

- **Drupal 11** + módulo `drupal/storybook`
- **SDC** — Single Directory Components (`.component.yml` + `.twig` + `.css`)
- **Storybook 10** con `@storybook/server-webpack5` (render server-side vía Drupal)
- **Bootstrap Icons** — set de iconos SVG inline
- **DDEV** — entorno de desarrollo local
- **Tome** — generación del sitio estático para producción

---

## Desarrollo local

- [DDEV](https://ddev.readthedocs.io/) instalado y corriendo
- Node.js ≥ 18 y npm

```bash
# Arrancar DDEV
ddev start

# Instalar dependencias Node (primera vez)
cd web/themes/custom/icosaedrico
npm install
```

---

## Storybook

### Modo desarrollo

```bash
npm run storybook
# → http://localhost:6006
```

Storybook llama a Drupal en `https://xacobe.net.ddev.site` para renderizar cada story.
Para usar otra URL de Drupal:

```bash
STORYBOOK_DRUPAL_URL=https://mi-drupal.ddev.site npm run storybook
```

### Regenerar stories JSON

Cada vez que se modifica un `.stories.twig` hay que regenerar el JSON correspondiente:

```bash
ddev drush storybook:generate-all-stories --force
```

Los archivos `*.stories.json` son generados y no deben editarse manualmente.

### Limpiar caché de Drupal

Necesario al crear o mover componentes SDC:

```bash
ddev drush cr
```

---

## Build estático de Storybook

Genera un Storybook completamente estático (sin dependencia de Drupal en runtime).
Requiere que DDEV esté corriendo para pre-renderizar las stories.

```bash
npm run build-storybook:static
```

Lo que hace internamente:
1. `scripts/snapshot-stories.mjs` — hace fetch de cada story a Drupal y guarda el HTML en `.storybook/renders/`
2. `storybook build` con `STORYBOOK_STATIC=true` — compila el Storybook usando los snapshots en lugar del servidor Drupal

El resultado queda en `storybook-static/`. Para previsualizarlo localmente:

```bash
npx serve storybook-static
# O con Python:
cd storybook-static && python3 -m http.server 8080
# → http://localhost:8080
```

Para desplegar en el servidor estático (Tome), copia el contenido de `storybook-static/` a la ruta deseada (p. ej. `/design-system/`).

> **Nota**: en el build estático los controles de args no re-renderizan. Es un showcase con los args por defecto, no un editor interactivo.

---

## Añadir o modificar componentes SDC

### Estructura de un componente

```
components/
  atoms/
    button/
      button.component.yml   ← schema de props y slots
      button.twig             ← template
      button.css              ← estilos (auto-cargados por SDC)
      button.stories.twig     ← definición de stories
      button.stories.json     ← generado por drush (no editar)
```

### Flujo de trabajo

1. Crear o editar `.component.yml`, `.twig` y `.css`
2. Crear o editar `.stories.twig`
3. Regenerar el JSON: `ddev drush storybook:generate-all-stories --force`
4. Limpiar caché: `ddev drush cr`
5. El componente aparece en Storybook al recargar

### Pasar contenido a slots desde templates Drupal

Los slots se rellenan con `embed` + `{% block %}`:

```twig
{% embed 'icosaedrico:mi-componente' with { prop: value } %}
  {% block mi_slot %}{{ content.field_ejemplo }}{% endblock %}
{% endembed %}
```

Desde `include()` (stories u otros componentes), se pasa via la clave `slots`:

```twig
{{ include('icosaedrico:mi-componente', {
  prop: value,
  slots: { mi_slot: '<p>Contenido</p>' },
}, with_context = false) }}
```

---

## Iconos (Bootstrap Icons)

Los iconos se renderizan inline desde el componente `icosaedrico:icon`:

```twig
{{ include('icosaedrico:icon', {
  icon_name: 'star',
  icon_svg_size: '24',
  icon_svg_fill: 'currentColor',
}, with_context = false) }}
```

Los archivos SVG están en `components/atoms/icon/icons/`. Para añadir nuevos iconos copia el archivo `.svg` (solo el contenido interno, sin el wrapper `<svg>`) a esa carpeta.

---

## Design tokens

Los tokens CSS están en `css/base/tokens.css` y se usan como variables CSS en todo el tema:

```css
color: var(--color-primary);
font-family: var(--font-accent);
padding: var(--spacing-4);
```

Los tokens están documentados en Storybook bajo **Tokens → Primitives** y **Tokens → Semantics**.

---

## Archivos generados (no commitear)

```
node_modules/
storybook-static/
.storybook/renders/
```
