const sass = require('sass');
const glob = require('glob'); // Esta línea debería importar glob correctamente
const fs = require('fs');
const path = require('path');

const componentsPath = 'components/**/*.*';

// Intenta usar glob.sync para ver si evitamos el problema
const files = glob.sync(componentsPath); // Usamos glob.sync para obtener los archivos directamente
console.log(files);

files.forEach(file => {
  const outFile = file.replace('.scss', '.css');
  sass.render({ file, outFile }, (err, result) => {
    if (err) {
      console.error(err);
      return;
    }

    fs.writeFile(outFile, result.css, (err) => {
      if (err) {
        console.error(err);
        return;
      }
      console.log(`Compiled: ${outFile}`);
    });
  });
});
