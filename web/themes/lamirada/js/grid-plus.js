(function (Drupal, once) {
  Drupal.behaviors.autorGridBehavior = {
    attach: function (context, settings) {
      const gridContainers = once('autor-grid-init', '.grid-container', context);
      gridContainers.forEach(function (gridContainer) {
        const maxVisibleImages = 5;

        function processAuthorGroups() {
          const authorNames = gridContainer.querySelectorAll('.grid-item-name');

          authorNames.forEach(function (authorName) {
            const authorImages = [];
            let currentElement = authorName.nextElementSibling;

            while (currentElement && !currentElement.classList.contains('grid-item-name')) {
              if (currentElement.tagName === 'A' && currentElement.classList.contains('colorbox')) {
                authorImages.push(currentElement);
              }
              currentElement = currentElement.nextElementSibling;
            }

            if (authorImages.length > maxVisibleImages) {
              for (let i = maxVisibleImages; i < authorImages.length; i++) {
                authorImages[i].style.display = 'none';
              }

              const indicator = document.createElement('span');
              indicator.textContent = ` (+${authorImages.length - maxVisibleImages})`;
              indicator.className = 'more-images-indicator';
              indicator.title = 'Click para ver todas las imágenes';

              const targetImage = authorImages[maxVisibleImages - 1];
              targetImage.appendChild(indicator);

              indicator.addEventListener('click', function (event) {
                event.stopPropagation();
                event.preventDefault();

                const isExpanded = indicator.classList.contains('expanded');

                if (isExpanded) {
                  for (let i = maxVisibleImages; i < authorImages.length; i++) {
                    authorImages[i].style.display = 'none';
                  }
                  indicator.classList.remove('expanded');
                  indicator.textContent = ` (+${authorImages.length - maxVisibleImages})`;
                  indicator.title = 'Click para ver todas las imágenes';

                  // Volver a colocarlo en la 5ª imagen
                  authorImages[maxVisibleImages - 1].appendChild(indicator);
                } else {
                  for (let i = maxVisibleImages; i < authorImages.length; i++) {
                    authorImages[i].style.display = 'block';
                  }
                  indicator.classList.add('expanded');
                  indicator.textContent = ' (mostrar menos)';
                  indicator.title = 'Click para mostrar menos imágenes';

                  // Moverlo a la última imagen visible
                  authorImages[authorImages.length - 1].appendChild(indicator);
                }
              });

            }
          });
        }

        processAuthorGroups();
      });
    }
  };
})(Drupal, once);
