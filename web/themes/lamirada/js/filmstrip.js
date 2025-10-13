(function (Drupal) {
    'use strict';

    Drupal.behaviors.filmstripToggle = {
        attach: function (context, settings) {
            const showPhotosBtn = document.getElementById('showPhotos');
            const showVideosBtn = document.getElementById('showVideos');
            const filmStrip = document.querySelector('.filmstrip');
            const siteName = document.querySelector('.site-name');

            if (
                showPhotosBtn &&
                showVideosBtn &&
                !showPhotosBtn.hasAttribute('data-filmstrip-processed')
            ) {
                showPhotosBtn.setAttribute('data-filmstrip-processed', 'true');
                showVideosBtn.setAttribute('data-filmstrip-processed', 'true');

                let currentMode = null;

                function toggleFilmstrip(mode) {
                    const items = document.querySelectorAll('.filmstrip__item');

                    items.forEach((item, index) => {
                        const hadPhoto = item.classList.contains('show-photo');
                        const hadVideo = item.classList.contains('show-video');
                        const wasActive = hadPhoto || hadVideo;

                        // Animación de cierre si estaba activo y estamos cambiando de modo
                        if (wasActive && (mode === null || (mode !== 'photo' && mode !== 'video'))) {
                            item.classList.add('flash--close');
                        }

                        // Limpiar clases previas
                        item.classList.remove('show-photo', 'show-video', 'flash');

                        setTimeout(() => {
                            // Eliminar animación de cierre si existía
                            item.classList.remove('flash--close');

                            // Aplicar nuevo estado si hay modo
                            if (mode === 'photo' || mode === 'video') {
                                item.classList.add(mode === 'photo' ? 'show-photo' : 'show-video');
                                item.classList.add('flash');
                            }

                            // Limpiar clases de animación después de que terminen
                            const cleanFlash = () => {
                                item.classList.remove('flash', 'flash--close');
                                item.removeEventListener('animationend', cleanFlash);
                            };
                            item.addEventListener('animationend', cleanFlash, { once: true });
                        }, index * 75);
                    });

                    // Resto de la lógica de UI
                    if (mode === 'photo') {
                        showPhotosBtn.classList.remove('inactive');
                        showVideosBtn.classList.add('inactive');
                        showPhotosBtn.classList.add('active');
                        showVideosBtn.classList.remove('active');
                        filmStrip.classList.add('photo');
                        filmStrip.classList.remove('video');
                        siteName.classList.add('photo');
                        siteName.classList.remove('video');
                    } else if (mode === 'video') {
                        showPhotosBtn.classList.add('inactive');
                        showVideosBtn.classList.remove('inactive');
                        showPhotosBtn.classList.remove('active');
                        showVideosBtn.classList.add('active');
                        filmStrip.classList.add('video');
                        filmStrip.classList.remove('photo');
                        siteName.classList.add('video');
                        siteName.classList.remove('photo');
                    } else {
                        // Modo neutral
                        showPhotosBtn.classList.remove('inactive', 'active');
                        showVideosBtn.classList.remove('inactive', 'active');
                        filmStrip.classList.remove('photo', 'video');
                        siteName.classList.remove('photo', 'video');
                    }

                    currentMode = mode;
                }

                // Manejador para cerrar al hacer clic fuera
                document.addEventListener('click', function (e) {
                    if (!e.target.closest('.filmstrip') && !e.target.closest('#showPhotos, #showVideos') && currentMode) {
                        toggleFilmstrip(null); // Pasar null para modo neutral
                    }
                  });


                // Clic en "Fotografías"
                showPhotosBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleFilmstrip('photo');
                });

                // Clic en "Vídeos"
                showVideosBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleFilmstrip('video');
                });

                // Clic fuera de la filmstrip: cerrar animando
                document.addEventListener('click', function (e) {
                    const clickedInsideFilmstrip = e.target.closest('.filmstrip');
                    const clickedOnMenuBtn = e.target.closest('#showPhotos, #showVideos');

                    if (!clickedInsideFilmstrip && !clickedOnMenuBtn && currentMode) {
                        // Restaurar estado inicial: ambos botones visibles
                        showPhotosBtn.classList.remove('inactive');
                        showVideosBtn.classList.remove('inactive');
                        showPhotosBtn.classList.remove('active');
                        showVideosBtn.classList.remove('active');
                        filmStrip.classList.remove('photo');
                        filmStrip.classList.remove('video');
                        siteName.classList.remove('photo');
                        siteName.classList.remove('video');

                        currentMode = null;

                        // Limpiar las clases de los ítems también
                        document.querySelectorAll('.filmstrip__item').forEach((item) => {
                            item.classList.remove('show-photo', 'show-video');
                        });
                    }
                });
            }
        }
    };
})(Drupal);
