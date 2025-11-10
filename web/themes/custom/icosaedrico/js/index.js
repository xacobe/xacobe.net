function calculateScrollDistance() {
    const images = document.querySelectorAll('.archivados .device-screen');
    
    images.forEach(img => {
        const item = img.parentElement; // El grid-item contenedor
        
        function setScrollDistance() {
            if (!img.naturalHeight || !img.naturalWidth) {
                return;
            }
            
            const containerHeight = 80;
            const containerWidth = 120;
            const scaledImageHeight = (img.naturalHeight / img.naturalWidth) * containerWidth;
            
            if (scaledImageHeight > containerHeight) {
                const hiddenPixels = scaledImageHeight - containerHeight;
                item.style.setProperty('--scroll-distance', `-${hiddenPixels}px`);
            } else {
                item.style.setProperty('--scroll-distance', '0px');
            }
        }
        
        if (img.complete && img.naturalHeight > 0) {
            setScrollDistance();
        } else {
            img.addEventListener('load', setScrollDistance);
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(calculateScrollDistance, 100);
});

window.addEventListener('resize', calculateScrollDistance);