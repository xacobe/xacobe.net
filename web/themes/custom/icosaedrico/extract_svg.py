# Remove the tag <svg> inside the .svg files and its attributes from the "directorio_svg" folder
# and make a copy into "directorio_destino" folder

import os
from bs4 import BeautifulSoup

# Define el directorio que contiene los archivos SVG.
directorio_svg = 'img/icons'

# Define el directorio donde se guardarán los archivos modificados.
directorio_destino = 'components/molecules/icon/icons'

# Crea el directorio de destino si no existe.
if not os.path.exists(directorio_destino):
    os.makedirs(directorio_destino)

# Lista todos los archivos SVG en el directorio de origen.
archivos_svg = [archivo for archivo in os.listdir(directorio_svg) if archivo.endswith('.svg')]

for nombre_archivo in archivos_svg:
    ruta_archivo_origen = os.path.join(directorio_svg, nombre_archivo)

    # Abre y lee el contenido del archivo SVG.
    with open(ruta_archivo_origen, 'r', encoding='utf-8') as archivo:
        contenido = archivo.read()

        # Utiliza BeautifulSoup para parsear el contenido SVG.
        soup = BeautifulSoup(contenido, 'lxml-xml')
        svg_tag = soup.find('svg')

        # Extrae solo el contenido interno del tag <svg>.
        contenido_interno = ''.join(map(str, svg_tag.contents))

        # Define la ruta del archivo en el directorio de destino, manteniendo el nombre original.
        ruta_archivo_destino = os.path.join(directorio_destino, nombre_archivo)

        # Guarda el contenido modificado en el directorio de destino.
        with open(ruta_archivo_destino, 'w', encoding='utf-8') as archivo_modificado:
            archivo_modificado.write(contenido_interno)

print("Modificación completada. Los archivos han sido procesados y guardados en:", directorio_destino)
