# Sistema de Documentación para Storybook + Drupal SDC

## 🎯 Problema

El módulo **Drupal Storybook Server** utiliza una arquitectura diferente a Storybook estándar:
- Renderiza componentes SERVER-SIDE (no client-side)
- No soporta MDX ni paneles de documentación HTML integrados
- No muestra descripciones en la UI

## ✅ Solución

Documentación en **3 capas** que funciona perfectamente:

### 1. **Metadatos en JSONs** (Datos)
Los `description` campos EN LOS `.stories.twig` se guardan automáticamente en los `.stories.json`:

```twig
{% stories mi_componente with {
  title: 'Category/Component',
  description: 'Esto se guarda en el JSON'
} %}

{% story variant with {
  name: 'Variant',
  description: 'Descripción de esta variante',
  args: { ... }
} %}
```

**Resultado en JSON**:
```json
{
  "title": "Category/Component",
  "description": "Esto se guarda en el JSON",
  "stories": [{
    "name": "Variant",
    "description": "Descripción de esta variante"
  }]
}
```

### 2. **Archivos DOCUMENTATION.md** (Consulta)
Cada componente tiene un `DOCUMENTATION.md` completo con:
- Descripción detallada
- Props documentados en tabla
- Ejemplos de código Twig (múltiples casos)
- HTML generado
- CSS classes
- Características especiales

**Por qué**: Fácil de consultar en el editor, sin depender de UI

### 3. **Guía STORYBOOK_DOCS.md** (Navegación)
En la raíz del tema, proporciona:
- Descripción general de todos los componentes
- Links a documentación detallada
- Cómo usar Storybook
- Tips de debugging

## 📋 Checklist para nuevos componentes

```
1. ✅ Crear componente SDC
   ├─ .component.yml (schema)
   ├─ .twig (template)
   ├─ .css (estilos)
   └─ .js (opcional)

2. ✅ Crear .stories.twig con descripciones
   ├─ {% stories %} with { title, description }
   └─ {% story %} with { name, args, description }

3. ✅ Regenerar JSONs
   $ drush storybook:generate-all-stories

4. ✅ Crear DOCUMENTATION.md
   ├─ Descripción
   ├─ Props en tabla
   ├─ Ejemplos de Twig
   ├─ HTML generado
   └─ CSS classes

5. ✅ Crear README.md
   ├─ Descripción breve
   ├─ Props
   └─ Uso rápido

6. ✅ Actualizar STORYBOOK_DOCS.md
   ├─ Agregar link al nuevo componente
   └─ Actualizar navegación
```

## 🔄 Workflow

### Cuando creas un componente:
1. Escribes `.stories.twig` con descripciones claras
2. Ejecutas `drush storybook:generate-all-stories`
3. Los JSONs se generan CON las descripciones automáticamente
4. Creas archivos DOCUMENTATION.md y README.md
5. Actualizas STORYBOOK_DOCS.md

### Cuando modificas un componente:
1. Editas `.stories.twig` si cambias descripciones/args
2. Ejecutas `drush storybook:generate-all-stories`
3. Actualizas DOCUMENTATION.md si cambió el comportamiento

## 📚 Beneficios de esta aproximación

✅ **No depende de UI**: Funciona con Storybook Server  
✅ **Fácil de consultar**: Los archivos están al lado del código  
✅ **Versionable**: Cambios en Git como el código  
✅ **No requiere plugins**: Usa características nativas del módulo  
✅ **Escalable**: Funciona para 10 o 100+ componentes  
✅ **Multiuso**: Markdown también sirve para documentación de proyecto  

## 🎯 Ejemplo completo

**File**: `components/molecules/my-button/my-button.stories.twig`
```twig
{% stories my_button with {
  title: 'Molecules/Button',
  description: 'Un botón reutilizable con múltiples variantes'
} %}

  {% story primary with {
    name: 'Primary',
    args: { 
      label: 'Click me',
      variant: 'primary'
    },
    description: 'Botón principal para acciones primarias'
  } %}
    {% include 'icosaedrico:my-button' with args %}
  {% endstory %}

  {% story secondary with {
    name: 'Secondary',
    args: { 
      label: 'Cancel',
      variant: 'secondary'
    },
    description: 'Botón secundario'
  } %}
    {% include 'icosaedrico:my-button' with args %}
  {% endstory %}

{% endstories %}
```

**File**: `components/molecules/my-button/DOCUMENTATION.md`
```markdown
# Button

Un botón reutilizable...

## Props

| Prop | Tipo | Por defecto |
|------|------|-------------|
| `label` | string | 'Click me' |
| `variant` | string | 'primary' |

## Ejemplos

### Primary button
\`\`\`twig
{% include 'icosaedrico:my-button' with {
  label: 'Save',
  variant: 'primary'
} %}
\`\`\`

...
```

**Resultado JSON**: Automáticamente generado con descripciones

## ⚠️ Limitaciones conocidas

- Storybook Server no muestra descripciones en la UI
- Los JSONs contienen los datos pero no se renderizan
- MDX/Docs addon no funciona con Server Rendering

**Esto es esperado y documentado**. La solución de Markdown funciona perfectamente.

---

**Última actualización**: Abril 2026  
**Módulo**: Drupal 11 SDC + Storybook Server  
**Autor**: Copilot
