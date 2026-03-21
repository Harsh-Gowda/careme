/**
 * Search Modal & Back to Top Toggle
 */
document.addEventListener('DOMContentLoaded', () => {
    // Search Modal
    const searchToggles = document.querySelectorAll('.js-search-toggle');
    const searchModal = document.querySelector('.js-search-modal');
    const searchClose = document.querySelector('.js-search-close');

    if (searchModal) {
        searchToggles.forEach(btn => {
            btn.addEventListener('click', () => {
                searchModal.classList.add('is-open');
                document.body.style.overflow = 'hidden';
                setTimeout(() => searchModal.querySelector('input').focus(), 100);
            });
        });

        searchClose.addEventListener('click', () => {
            searchModal.classList.remove('is-open');
            document.body.style.overflow = '';
        });

        // Close on ESC
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && searchModal.classList.contains('is-open')) {
                searchModal.classList.remove('is-open');
                document.body.style.overflow = '';
            }
        });
    }

    // Back to Top
    const backToTop = document.querySelector('.js-back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 500) {
                backToTop.classList.add('is-visible');
            } else {
                backToTop.classList.remove('is-visible');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
