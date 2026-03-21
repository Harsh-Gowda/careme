/**
 * Testimonial Slider
 */
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.js-testimonial-slider');
    if (!slider) return;

    const track = slider.querySelector('.js-slider-track');
    const items = slider.querySelectorAll('.js-slider-item');
    const prevBtn = slider.querySelector('.js-slider-prev');
    const nextBtn = slider.querySelector('.js-slider-next');
    const dotsContainer = slider.querySelector('.js-slider-dots');

    let currentIndex = 0;
    const totalItems = items.length;

    // Create dots
    items.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.classList.add('c-slider-dot');
        if (index === 0) dot.classList.add('is-active');
        dot.setAttribute('aria-label', `Go to testimonial ${index + 1}`);
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll('.c-slider-dot');

    function updateSlider() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        dots.forEach((dot, index) => {
            dot.classList.toggle('is-active', index === currentIndex);
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateSlider();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateSlider();
    }

    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);

    // Autoplay
    if (slider.dataset.autoplay === 'true') {
        setInterval(nextSlide, 5000);
    }

    // Touch support (Basic)
    let touchStartX = 0;
    slider.addEventListener('touchstart', e => touchStartX = e.touches[0].clientX, {passive: true});
    slider.addEventListener('touchend', e => {
        const touchEndX = e.changedTouches[0].clientX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) nextSlide();
            else prevSlide();
        }
    }, {passive: true});
});
