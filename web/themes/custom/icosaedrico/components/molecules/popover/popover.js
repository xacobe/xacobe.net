(function () {
  // Cierra cualquier popover abierto al hacer click fuera
  document.addEventListener('click', function (e) {
    document.querySelectorAll('.popover[open]').forEach(function (popover) {
      if (!popover.contains(e.target)) {
        popover.removeAttribute('open');
      }
    });
  });

  // Cierra con Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      document.querySelectorAll('.popover[open]').forEach(function (popover) {
        popover.removeAttribute('open');
      });
    }
  });
}());
