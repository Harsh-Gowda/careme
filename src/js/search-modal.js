/**
 * Live Search Modal & Interaction Logic
 */
document.addEventListener('DOMContentLoaded', () => {
    const searchToggle = document.querySelector('.js-search-toggle');
    const searchModal = document.getElementById('search-modal');
    const searchClose = document.querySelector('.js-search-close');
    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-live-results');

    if (!searchToggle || !searchModal) return;

    // Open Modal
    searchToggle.addEventListener('click', (e) => {
        e.preventDefault();
        searchModal.classList.add('is-active');
        document.body.style.overflow = 'hidden';
        setTimeout(() => searchInput.focus(), 300);
    });

    // Close Modal
    const closeModal = () => {
        searchModal.classList.remove('is-active');
        document.body.style.overflow = '';
        searchResults.innerHTML = '';
        searchInput.value = '';
    };

    searchClose.addEventListener('click', closeModal);
    
    // Close on ESC
    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && searchModal.classList.contains('is-active')) {
            closeModal();
        }
    });

    // Live Search (Simulated for Demo)
    let searchTimeout;
    searchInput.addEventListener('input', (e) => {
        const query = e.target.value.trim();
        clearTimeout(searchTimeout);

        if (query.length < 3) {
            searchResults.innerHTML = '';
            return;
        }

        searchResults.innerHTML = '<div class="text-center py-md"><div class="spinner-border text-primary" role="status"></div></div>';

        searchTimeout = setTimeout(() => {
            simulateResults(query);
        }, 500);
    });

    function simulateResults(query) {
        const mockResults = [
            { title: 'Maintaining a Bright Smile', link: '#', category: 'Health Tips' },
            { title: 'Oral Hygiene Best Practices', link: '#', category: 'General' },
            { title: 'Emergency Dental Care', link: '#', category: 'Services' },
        ];

        const filtered = mockResults.filter(r => r.title.toLowerCase().includes(query.toLowerCase()));

        if (filtered.length > 0) {
            searchResults.innerHTML = `
                <div class="list-group list-group-flush">
                    ${filtered.map(r => `
                        <a href="${r.link}" class="list-group-item list-group-item-action py-md px-0 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">${r.title}</h6>
                                <span class="badge bg-light text-primary">${r.category}</span>
                            </div>
                        </a>
                    `).join('')}
                </div>
                <div class="text-center mt-md">
                    <button type="submit" form="search-form" class="btn btn--link text-primary font-weight-bold">View all results →</button>
                </div>
            `;
        } else {
            searchResults.innerHTML = `<div class="text-center py-md text-muted">No results found for "${query}"</div>`;
        }
    }
});
