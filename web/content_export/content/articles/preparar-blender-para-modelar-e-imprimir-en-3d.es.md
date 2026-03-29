---
type: article
lang: es
draft: false
title: 'Preparar Blender para modelar e imprimir en 3D'
slug: preparar-blender-para-modelar-e-imprimir-en-3d
date: '2024-01-21'
author: xacobe
path: /blog/preparar-blender-para-modelar-e-imprimir-en-3d
taxonomy:
  tags:
    - '3D Print'
    - Blender
references:
  field_image: 11
promote: true
sticky: false
metatag:
  -
    tag: meta
    attributes:
      name: title
      content: 'Preparar Blender para modelar e imprimir en 3D | xacobe.net'
  -
    tag: meta
    attributes:
      name: description
      content: 'Configurar Blender para modelar piezas para la impresión 3D implica varios pasos para asegurarse de que los modelos sean precisos y estén listos para la impresión. Aquí hay una guía básica para configurar Blender para este propósito:'
  -
    tag: link
    attributes:
      rel: canonical
      href: 'https://xacobe.net.ddev.site/es/blog/preparar-blender-para-modelar-e-imprimir-en-3d'
# Drupal
nid: 3
translation_of: null
checksum: 1132619fc912cd2de6c1a21df0ab9686392f749f
---

Configurar Blender para modelar piezas para la impresión 3D implica varios pasos para asegurarse de que los modelos sean precisos y estén listos para la impresión. Aquí hay una guía básica para configurar Blender para este propósito:

### **Configuración Inicial**

1. **Unidad de Medida**:
    - Ve a `Scene Properties` (ícono de engranaje en el panel derecho).
    - En la sección `Units`, cambia el `Length` a `Millimeters` o `Centimeters`, según tus necesidades.
2. **Escala del Grid**:
    - En la ventana 3D, presiona la tecla `N` para abrir el panel lateral.
    - Ve a la pestaña `View` y ajusta el `Grid Scale` para que coincida con tus unidades de medida.
3. **Configurar el Volumen de la Impresora**:
    - Puedes crear un cubo que represente el volumen de impresión de tu impresora 3D para asegurarte de que tus modelos caben.

### **Modelado**

1. **Usar Mallas Manifold**: Asegúrate de que tu objeto sea una malla "manifold" (estanca) para que sea imprimible.
    
    Una malla "manifold" es una malla que es completamente estanca, lo que significa que no tiene agujeros, bordes sueltos o caras superpuestas. Para asegurarte de que tu malla sea manifold en Blender, puedes seguir estos pasos:
    
    
    1. **Selecciona tu objeto**: Haz clic en el objeto que quieres comprobar.
    2. **Modo de Edición**: Cambia al modo de edición (`Tab`).
    3. **Selecciona Todo**: Asegúrate de que todas las caras, vértices y aristas estén seleccionados (`A`).
    4. **Comprobar Malla**: Ve a `Mesh > Cleanup` en el menú superior y selecciona `Check All` o `Select Non-Manifold` (dependiendo de tu versión de Blender).
    5. **Reparar Problemas**: Si se seleccionan áreas de la malla, eso indica que hay problemas. Tendrás que repararlos manualmente, que podría implicar cerrar agujeros, eliminar vértices sueltos, etc.
    
    **b. Comprobar Normales**
    
    Las normales son vectores perpendiculares a las caras de la malla. Es crucial que todas las normales estén orientadas hacia afuera para que la impresión 3D sea exitosa.
    
    
    1. **Selecciona tu objeto**: Haz clic en el objeto que quieres comprobar.
    2. **Modo de Edición**: Cambia al modo de edición (`Tab`).
    3. **Mostrar Normales**: En el panel derecho (`N` para abrir), ve a la pestaña `Viewport Overlays` (ícono que parece un círculo con una cuadrícula) y busca la sección `Normals`. Activa `Face` o `Vertex` para ver las normales como pequeñas líneas azules.
    4. **Orientar Normales**: Si ves que algunas normales están orientadas hacia adentro, puedes corregirlas seleccionando las caras afectadas y luego yendo a `Mesh > Normals > Flip` para invertirlas. También puedes usar `Mesh > Normals > Recalculate Outside` para intentar corregirlas automáticamente.
    5. **Comprobar Normales**: Asegúrate de que todas las normales de la malla estén orientadas hacia afuera.
    6. **Aplicar Transformaciones**: Antes de exportar, aplica todas las transformaciones (`Ctrl + A` y elige `All Transformations`).

### **Exportar**

1. **Formato de Archivo**: Generalmente, los formatos más comunes para la impresión 3D son `.STL` y `.OBJ`.
2. **Opciones de Exportación**:
    - Ve a `File > Export > STL/OBJ`.
    - Asegúrate de seleccionar la opción `Selection Only` si tienes más de un objeto en la escena.
    - Verifica que la escala y las unidades estén configuradas correctamente.

### **Comprobación Final**

Antes de imprimir, es recomendable usar un software de corte para comprobar si el modelo es imprimible y para configurar los parámetros de impresión.

Estos son los pasos básicos para configurar Blender para modelado 3D para impresión. Dependiendo de tus necesidades y del tipo de impresora que estés utilizando, podrías necesitar ajustes adicionales.

Para testear de una manera fácil y rápida nuestros modules y validarlos para imprimir en 3D tenemos el plugin: [3D Print Toolbox — Blender Manual](https://docs.blender.org/manual/en/latest/addons/mesh/3d_print_toolbox.html)