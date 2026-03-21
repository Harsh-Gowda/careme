/**
 * Form Validation
 */
document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.js-appointment-form');

    forms.forEach(form => {
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');

            // Simulate submission
            if (form.checkValidity()) {
                event.preventDefault();
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.disabled = true;
                const originalContent = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';

                // AJAX Simulation
                setTimeout(() => {
                    const successMsg = document.createElement('div');
                    successMsg.className = 'alert alert-success mt-3 fade show';
                    successMsg.innerHTML = '<strong>Success!</strong> Your appointment request has been sent. Our team will contact you shortly.';
                    
                    form.appendChild(successMsg);
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalContent;
                    form.reset();
                    form.classList.remove('was-validated');

                    // Auto-remove message
                    setTimeout(() => {
                        successMsg.classList.remove('show');
                        setTimeout(() => successMsg.remove(), 500);
                    }, 5000);
                }, 1500);
            }
        }, false);
    });
});
