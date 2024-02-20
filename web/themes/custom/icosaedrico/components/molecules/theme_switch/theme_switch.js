document.addEventListener('DOMContentLoaded', function () {
  const themeControllers = document.querySelectorAll('.theme-controller');

  // Cargar el tema desde el localStorage al cargar la página
  const currentTheme = localStorage.getItem('theme') || 'default';

  themeControllers.forEach(controller => {
    if (controller.type === 'checkbox') {
      // Para el checkbox, marcamos o desmarcamos según el tema guardado
      controller.checked = currentTheme === controller.value;
    } else if (controller.type === 'radio') {
      // Para los radio buttons, seleccionamos el que corresponde al tema guardado
      controller.checked = currentTheme === controller.value;
    }

    controller.addEventListener('change', function () {
      if (controller.checked) {
        const selectedTheme = controller.value;
        localStorage.setItem('theme', selectedTheme);
        applyTheme(selectedTheme);
      }
    });
  });

  // Aplicar el tema inicialmente basado en el localStorage
  applyTheme(currentTheme);
});

function applyTheme(theme) {
  // Remover todas las clases de tema posibles del body
  const themeClasses = ['default', 'synthwave', 'light', 'cyberpunk', 'valentine', 'aqua'];
  themeClasses.forEach(themeClass => document.body.classList.remove(themeClass));

  // Añadir la clase de tema actual al body
  document.body.classList.add(theme);
}
