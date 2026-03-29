---
type: article
lang: es
draft: true
title: 'Cheatsheet Docker - DDEV - Podman'
slug: cheatsheet-docker-ddev-podman
date: '2024-09-11'
author: xacobe
path: /blog/cheatsheet-docker-ddev-podman
promote: true
sticky: false
metatag:
  -
    tag: meta
    attributes:
      name: title
      content: 'Cheatsheet Docker - DDEV - Podman | xacobe.net'
  -
    tag: meta
    attributes:
      name: description
      content: 'Para realizar una operación similar a ddev poweroff pero usando Docker directamente, debemos detener y eliminar todos los contenedores y redes asociados. Aquí está cómo hacerlo:1. Detener todos los contenedoresPrimero, detenemos todos los contenedores en ejecución. Usamos el siguiente comando para detener todos los contenedores:docker stop $(docker ps -q) 2. Eliminar todos los contenedoresUna vez que todos los contenedores están detenidos, podemos eliminarlos:'
  -
    tag: link
    attributes:
      rel: canonical
      href: 'https://xacobe.net.ddev.site/es/blog/cheatsheet-docker-ddev-podman'
# Drupal
nid: 29
translation_of: null
checksum: 9e69c54d2aa6837a5baf0bd44c8740fccb248fb4
---

Para realizar una operación similar a `ddev poweroff` pero usando Docker directamente, debemos detener y eliminar todos los contenedores y redes asociados. Aquí está cómo hacerlo:

### 1. **Detener todos los contenedores**

Primero, detenemos todos los contenedores en ejecución. Usamos el siguiente comando para detener todos los contenedores:

`docker stop $(docker ps -q)`

### 2. **Eliminar todos los contenedores**

Una vez que todos los contenedores están detenidos, podemos eliminarlos:

`docker rm $(docker ps -aq)`

Si hay contenedores en ejecución que no se pueden eliminar con `docker rm`, asegúrate de detenerlos primero con el comando `docker stop`.

### 3. **Eliminar redes no utilizadas**

Luego, podemos eliminar redes que no están en uso:

`docker network prune`

### 4. **Eliminar imágenes no utilizadas**

Si también deseas limpiar imágenes no utilizadas (que no están asociadas a ningún contenedor), puedes usar:

`docker image prune -a`

### 5. **Eliminar volúmenes no utilizados**

Para eliminar volúmenes no utilizados:

`docker volume prune`

### 6. **Verificar**

Finalmente, verifica que todos los contenedores y redes han sido eliminados:

`docker ps -adocker network ls`

Para realizar una operación similar a `ddev poweroff` pero usando Podman, debemos detener y eliminar contenedores y redes. Aquí te explico cómo hacerlo:

### 1. **Detener todos los contenedores**

Primero, detendremos todos los contenedores en ejecución. Usamos el siguiente comando para detener todos los contenedores:

bash

Copy code

`podman stop $(podman ps -q)`

### 2. **Eliminar todos los contenedores**

Una vez que todos los contenedores están detenidos, los eliminamos:

bash

Copy code

`podman rm $(podman ps -aq)`

Si hay contenedores en ejecución que no se pueden eliminar con `podman rm`, asegúrate de detenerlos primero con el comando `podman stop`.

### 3. **Eliminar redes no utilizadas**

Para eliminar redes que no están en uso, usamos:

bash

Copy code

`podman network prune`

### 4. **Eliminar imágenes no utilizadas**

Si deseas limpiar imágenes no utilizadas (que no están asociadas a ningún contenedor), puedes usar:

bash

Copy code

`podman image prune -a`

### 5. **Eliminar volúmenes no utilizados**

Para eliminar volúmenes no utilizados:

bash

Copy code

`podman volume prune`

### 6. **Verificar**

Finalmente, verifica que todos los contenedores y redes han sido eliminados:

bash

Copy code

`podman ps -apodman network ls`

Estos comandos te permitirán limpiar tu entorno Podman de manera similar a `ddev poweroff` en DDEV. Si necesitas más ayuda o tienes alguna otra pregunta, ¡avísame!