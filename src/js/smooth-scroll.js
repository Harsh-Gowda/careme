/**
 * Smooth Scroll
 */
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                
                const headerOffset = 100;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                const mobileMenu = document.querySelector('.js-mobile-menu');
                const menuToggle = document.querySelector('.js-menu-toggle');
                if (mobileMenu && mobileMenu.classList.contains('is-open')) {
                    mobileMenu.classList.remove('is-open');
                    menuToggle.classList.remove('is-active');
                    document.body.style.overflow = '';
                }
            }
        });
    });
});
