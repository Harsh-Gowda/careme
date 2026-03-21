/**
 * Before/After Image Slider
 */
document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.js-ba-slider');

    sliders.forEach(slider => {
        const range = slider.querySelector('.js-ba-range');
        const afterImage = slider.querySelector('.js-ba-after');
        const handle = slider.querySelector('.js-ba-handle');

        range.addEventListener('input', (e) => {
            const val = e.target.value;
            afterImage.style.clipPath = `inset(0 0 0 ${val}%)`;
            handle.style.left = `calc(${val}% - 20px)`; // Adjust for handle width center
            
            // Correction for handle line
            handle.style.setProperty('--handle-pos', `${val}%`);
        });

        // Initial setup for the handle line
        const initVal = range.value;
        afterImage.style.clipPath = `inset(0 0 0 ${initVal}%)`;
    });
});
