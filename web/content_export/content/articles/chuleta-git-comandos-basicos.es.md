---
type: article
lang: es
draft: false
title: 'Chuleta Git, comandos básicos'
slug: chuleta-git-comandos-basicos
date: '2023-12-13'
author: xacobe
path: /blog/chuleta-git-comandos-basicos
taxonomy:
  tags:
    - webdev
    - git
references:
  field_image: 10
promote: true
sticky: false
metatag:
  -
    tag: meta
    attributes:
      name: title
      content: 'Chuleta Git, comandos básicos | xacobe.net'
  -
    tag: meta
    attributes:
      name: description
      content: 'Un listado de comandos habituales.'
  -
    tag: link
    attributes:
      rel: canonical
      href: 'https://xacobe.net.ddev.site/es/blog/chuleta-git-comandos-basicos'
# Drupal
nid: 2
translation_of: null
checksum: bd41c062aa724825146186a1d9c6977b5b22ff19
---

Un listado de comandos habituales.

### Desahacer el último commit en local

1. **git reset --soft HEAD~1**:
    - Este comando retrocede el HEAD del repositorio al commit anterior, pero mantiene los cambios del último commit en el área de preparación (staging area). Es decir, los cambios que habíamos hecho y que estaban incluidos en el último commit ahora estarán listos para ser agregados a un nuevo commit si así lo deseamos.
2. **git reset --soft HEAD**:
    - Este comando quita los archivos del área de preparación, pero mantiene los cambios en ellos. Es decir, los archivos no estarán marcados para ser incluidos en el próximo commit, pero los cambios realizados en los archivos permanecerán en nuestro espacio de trabajo.

### Deshacer un commit en un repositorio remoto

**1. Deshacer el commit sin conservar los cambios localmente:**  
  
`# Volvemos al commit anterior y descartamos los cambios realizados en el commit deshecho`  
`git reset --hard HEAD~1`

`# Forzamos el envío al repositorio remoto para reflejar la reversión`  
`git push origin HEAD --force`  
Esto eliminará el commit de la historia local y remotamente. Esto puede afectar a otros desarrolladores si ya han basado su trabajo en este commit, por lo que es importante comunicarles la acción.

**2. Deshacer el commit pero conservar los cambios localmente:**  
Si deseas deshacer el commit pero mantener los cambios en tu área de trabajo (staging) para hacer modificaciones o simplemente no perderlos, seguimos estos pasos:

  
\# Volvemos al commit anterior pero mantenemos los cambios realizados en el commit deshecho en el área de trabajo  
git reset --soft HEAD~1

\# Realizamos los cambios necesarios y hacemos un nuevo commit  
git commit -m "Nuevo mensaje de commit"

\# Forzamos el envío del nuevo commit al repositorio remoto  
git push origin HEAD --force

  
Este enfoque es menos destructivo, ya que conserva los cambios pero reescribe la historia, lo cual también puede tener implicaciones si otros desarrolladores ya han basado su trabajo en el commit que se deshizo.

Importante:  
Forzar el envío (--force): Esto sobrescribe la historia en el repositorio remoto. Es crucial asegurarse de que nadie más haya trabajado en ese commit para evitar conflictos.

### Parches

1. **Descargar y aplicar un parche**:  
    `curl -O `[`https://www.drupal.org/files/[patch-name].patch`](https://www.drupal.org/files/[patch-name].patch)  
    `git apply --index [patch-name].patch`

En una sola línea:  
`curl `[`https://www.drupal.org/files/[patch-name].patch`](https://www.drupal.org/files/[patch-name].patch)` | git apply --index -`