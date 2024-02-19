# Icosaedrico Drupal theme #

## Features ##


🌬️ **TailwindCSS** https://tailwindcss.com/docs

🌼 **DaisyUI** https://daisyui.com/

📐 **Tailwind typography** https://tailwindcss.com/docs/typography-plugin

🚀 **Bootstrap Icons** https://icons.getbootstrap.com/.

## Instructions ##
**To compile Tailwind:**

``npx tailwindcss -i ./css/styles.css -o ./css/output.css --watch``

**Generate icons to use with the "icon" SDC component**
Run extract_svg.py \
``python3 extract_svg.py``
\
This will make a copy of the .svg files in the "img/icons/" folder to "component/molecules/icon/icons/" folder but without the "svg" tag and it attributes.
\
You can changes this in
script
