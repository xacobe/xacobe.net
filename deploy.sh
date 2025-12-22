#!/bin/bash

set -e

echo "Cambiando a la rama main..."
git checkout main

echo "Generando sitio estático con Drush Tome..."
ddev drush tome:static -l https://xacobe.net -y

echo "Añadiendo cambios..."
git add .

echo "Haciendo commit..."
git commit -m "Actualizar sitio estático" || true

# Cambiar a la rama gh-pages
echo "Cambiando a la rama gh-pages..."
git checkout gh-pages

# Guardar solo el archivo CNAME si existe
echo "Preservando archivo CNAME..."
if [ -f "CNAME" ]; then
    CNAME_CONTENT=$(cat CNAME)
    PRESERVE_CNAME=true
else
    CNAME_CONTENT="xacobe.net"
    PRESERVE_CNAME=false
fi

# Limpiar TODO en gh-pages excepto CNAME
echo "Limpiando directorio raíz (excepto CNAME)..."
# Método seguro: eliminar todo excepto .git y CNAME
find . -maxdepth 1 ! -name '.' ! -name '.git' ! -name 'CNAME' -exec rm -rf {} + 2>/dev/null || true

# Restaurar/Crear CNAME
echo "Restaurando archivo CNAME..."
echo "$CNAME_CONTENT" > CNAME

# Copiar la carpeta html desde main
echo "Copiando archivos estáticos desde main..."
git checkout main -- html

# Mover contenido de html a la raíz
echo "Moviendo archivos a la raíz..."
if [ -d "html" ]; then
    mv html/* . 2>/dev/null || true
    rmdir html 2>/dev/null || true
fi

# Añadir los cambios
echo "Añadiendo cambios a gh-pages..."
git add . 

# Hacer commit de los cambios en gh-pages
echo "Haciendo commit del sitio estático..."
git commit -m "Publicando sitio estático $(date '+%Y-%m-%d %H:%M:%S')"

# Hacer push a la rama gh-pages
echo "Haciendo push a la rama gh-pages..."
git push origin gh-pages

# Volver a main (opcional)
git checkout main

echo "✅ ¡Sitio publicado!"
echo "🌐 Disponible en: https://xacobe.net/"