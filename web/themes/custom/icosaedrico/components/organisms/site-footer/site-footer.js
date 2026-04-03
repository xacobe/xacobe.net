/**
 * Site Footer - Dynamic Year Update
 * 
 * Automatically updates the copyright end year to the current year
 */

(function() {
  function updateCopyrightYear() {
    const yearElement = document.querySelector('.footer-copyright__year');
    if (yearElement) {
      const currentYear = new Date().getFullYear();
      yearElement.textContent = currentYear;
    }
  }

  // Update on page load
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', updateCopyrightYear);
  } else {
    updateCopyrightYear();
  }
})();
