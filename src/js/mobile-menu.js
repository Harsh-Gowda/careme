/**
 * Mobile Menu Toggle
 */
document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.querySelector('.js-nav-toggle');
    const navMenu = document.querySelector('.c-nav__menu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            const expanded = navToggle.getAttribute('aria-expanded') === 'true' || false;
            navToggle.setAttribute('aria-expanded', !expanded);
            navToggle.classList.toggle('is-active');
            navMenu.classList.toggle('is-open');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!navToggle.contains(event.target) && !navMenu.contains(event.target)) {
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.classList.remove('is-active');
                navMenu.classList.remove('is-open');
            }
        });

        // Close on ESC
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.classList.remove('is-active');
                navMenu.classList.remove('is-open');
            }
        });
    }
});
