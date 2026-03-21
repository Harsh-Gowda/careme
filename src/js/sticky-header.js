/**
 * Sticky Header
 */
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.js-sticky-header');
    if (!header) return;

    let lastScrollY = window.scrollY;
    const threshold = 100;

    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        if (currentScrollY > threshold) {
            header.classList.add('is-sticky');
        } else {
            header.classList.remove('is-sticky');
        }

        lastScrollY = currentScrollY;
    }, { passive: true });
});
