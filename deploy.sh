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
find . -maxdepth 1 ! -name '.git' ! -name '.' ! -name '.gitignore' -exec rm -rf {} +

echo "📦 Copiando sitio estático..."
git checkout main -- html

# Detectar la estructura generada por Tome
if [ -d "html/xacobe.net" ]; then
    echo "📁 Moviendo contenido desde html/xacobe.net/..."
    mv html/xacobe.net/* . 2>/dev/null || true
    mv html/xacobe.net/.* . 2>/dev/null || true
elif [ -d "html/internal" ]; then
    echo "📁 Moviendo contenido desde html/internal/..."
    mv html/internal/* . 2>/dev/null || true
    mv html/internal/.* . 2>/dev/null || true
else
    echo "📁 Moviendo contenido desde html/..."
    mv html/* . 2>/dev/null || true
    mv html/.* . 2>/dev/null || true
fi

# Limpiar directorios vacíos
rm -rf html

# Si existe carpeta internal en la raíz, mover su contenido
if [ -d "internal" ]; then
    echo "📁 Reorganizando desde carpeta internal..."
    mv internal/* . 2>/dev/null || true
    mv internal/.* . 2>/dev/null || true
    rmdir internal 2>/dev/null || true
fi

echo "📤 Publicando en GitHub Pages..."
git add -A .
git commit -m "Deploy: $(date +'%Y-%m-%d %H:%M:%S')"
git push origin gh-pages

echo "↩️  Volviendo a main..."
git checkout main

echo "✅ Sitio publicado en GitHub Pages"
echo "🌐 Disponible en: https://xacobe.github.io/xacobe.net/"