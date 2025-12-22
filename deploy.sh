#!/bin/bash

set -e

echo "--------------------------------"
echo "Cambiando a la rama main..."
echo "--------------------------------"
git checkout main

echo "--------------------------------"
echo "Generando sitio estático con Drush Tome..."
echo "--------------------------------"
ddev drush tome:static -l https://xacobe.net

echo "--------------------------------"
echo "Añadiendo cambios..."
echo "--------------------------------"
git add .

echo "--------------------------------"
echo "Haciendo commit..."
echo "--------------------------------"
git commit -m "Actualizar sitio estático" || true

# Haciendo push a la rama main
echo "--------------------------------"
echo "Haciendo push a la rama main..."
echo "--------------------------------"
git push origin main

# Cambiar a la rama gh-pages
echo "--------------------------------"
echo "Cambiando a la rama gh-pages..."
echo "--------------------------------"
git checkout gh-pages

# Guardar solo el archivo CNAME si existe
echo "--------------------------------"
echo "Preservando archivo CNAME..."
echo "--------------------------------"
if [ -f "CNAME" ]; then
CNAME_CONTENT=$(cat CNAME)
PRESERVE_CNAME=true
else
    CNAME_CONTENT="xacobe.net"
PRESERVE_CNAME=false
fi

# Limpiar TODO en gh-pages excepto CNAME
echo "--------------------------------"
echo "Limpiando directorio raíz (excepto CNAME)..."
echo "--------------------------------"
# Método seguro: eliminar todo excepto .git y CNAME
find . -maxdepth 1 ! -name '.' ! -name '.git' ! -name 'CNAME' -exec rm -rf {} + 2>/dev/null || true

# Restaurar/Crear CNAME
echo "--------------------------------"
echo "Restaurando archivo CNAME..."
echo "--------------------------------"
echo "$CNAME_CONTENT" > CNAME

# Copiar la carpeta html desde main
echo "--------------------------------"
echo "Copiando archivos estáticos desde main..."
echo "--------------------------------"
git checkout main -- html

# Mover contenido de html a la raíz
echo "--------------------------------"
echo "Moviendo archivos a la raíz..."
echo "--------------------------------"
if [ -d "html" ]; then
mv html/* . 2>/dev/null || true
rmdir html 2>/dev/null || true
fi

# Añadir los cambios
echo "--------------------------------"
echo "Añadiendo cambios a gh-pages..."
echo "--------------------------------"
git add . 

# Hacer commit de los cambios en gh-pages
echo "--------------------------------"
echo "Haciendo commit del sitio estático..."
echo "--------------------------------"
git commit -m "Publicando sitio estático $(date '+%Y-%m-%d %H:%M:%S')"

# Hacer push a la rama gh-pages
echo "--------------------------------"
echo "Haciendo push a la rama gh-pages..."
echo "--------------------------------"
git push origin gh-pages

# Volver a main (opcional)
echo "--------------------------------"
echo "Volviendo a la rama main..."
echo "--------------------------------"
git checkout main

echo "--------------------------------"
echo "✅ ¡Sitio publicado!"
echo "🌐 Disponible en: https://xacobe.net/"
echo "--------------------------------"