(function ($, Drupal, once) {
  // Función para que cuando hagamos click en el video flimstrip en la portada
  // nos lleve a la sección #video
  Drupal.behaviors.sliderClickToScroll = {
    attach: function (context, settings) {
      // Usamos 'once' para asegurarnos de que el comportamiento solo se aplica una vez.
      once('sliderClickToScroll', '.filmstrip-video-portada .splide__slide', context).forEach(function (slide) {
        // Añadimos un event listener para el clic en cada slide.
        slide.addEventListener('click', function (event) {
          // Verificamos si el slide está dentro del viewport.
          const rect = slide.getBoundingClientRect();
          const isInViewport = (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );

          // Si el slide está dentro del viewport, desplazamos a #videos.
          if (isInViewport) {
            const videosSection = document.getElementById('video');
            if (videosSection) {
              videosSection.scrollIntoView({ behavior: 'smooth' });
            }
          }
        });
      });
    }
  };
})(jQuery, Drupal, once);
