#!/bin/bash

set -e

echo "🔧 Preparando directorio html..."
# Eliminar y recrear el directorio html
rm -rf html
mkdir -p html
ddev exec "chmod 777 /var/www/html/html"

echo "🔨 Generando sitio estático con Tome..."
ddev drush tome:static --uri=https://xacobe.github.io/xacobe.net/ --yes

echo "💾 Guardando cambios en main..."
git checkout main
git add .
git commit -m "Actualizar contenido" || true

echo "🔄 Cambiando a rama gh-pages..."
git checkout gh-pages

echo "🧹 Limpiando contenido anterior..."
git rm -rf . 2>/dev/null || true

echo "📦 Copiando sitio estático..."
git checkout main -- html

# Mover todo el contenido de html a la raíz
mv html/* . 2>/dev/null || true
mv html/.* . 2>/dev/null || true
rmdir html 2>/dev/null || true

# Si existe la carpeta xacobe.net, mover su contenido a la raíz
# (probablemente contiene index.html y assets principales)
if [ -d "xacobe.net" ]; then
    echo "📁 Procesando carpeta xacobe.net..."
    # Mover archivos que están dentro de xacobe.net a la raíz
    # Pero sin sobrescribir las carpetas que ya existen (blog, en, gl, etc)
    cp -rn xacobe.net/* . 2>/dev/null || true
    cp -rn xacobe.net/.* . 2>/dev/null || true
    rm -rf xacobe.net
fi

echo "📤 Publicando en GitHub Pages..."
git add -A .
git commit -m "Deploy: $(date +'%Y-%m-%d %H:%M:%S')"
git push origin gh-pages

echo "↩️  Volviendo a main..."
git checkout main

echo "✅ Sitio publicado en GitHub Pages"
echo "🌐 Disponible en: https://xacobe.github.io/xacobe.net/"