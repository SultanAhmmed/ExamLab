// assets/js/script.js
(function() {
    'use strict';

    // ── Search Demo ──
    const searchInput = document.getElementById('studentSearch');
    const searchBtn = document.getElementById('searchBtn');
    const feedback = document.getElementById('searchFeedback');

    // Sample student names (matching leaderboard)
    const studentNames = [
        'Sarah Johnson', 'Michael Chen', 'Emily Rodriguez',
        'James Kim', 'Aisha Patel', 'David Okafor'
    ];

    function performSearch() {
        const query = searchInput.value.trim().toLowerCase();
        if (!query) {
            feedback.textContent = '🔍 Please enter a name to search.';
            feedback.style.color = '#6c7a8a';
            return;
        }

        const matches = studentNames.filter(name =>
            name.toLowerCase().includes(query)
        );

        if (matches.length > 0) {
            feedback.innerHTML = `✅ Found <strong>${matches.length}</strong> student${matches.length > 1 ? 's' : ''}: ${matches.join(', ')}`;
            feedback.style.color = '#0d6efd';
        } else {
            feedback.textContent = `❌ No students found matching "${searchInput.value.trim()}".`;
            feedback.style.color = '#dc3545';
        }
    }

    if (searchBtn && searchInput && feedback) {
        searchBtn.addEventListener('click', performSearch);
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });
    }

    // ── Active nav link on scroll ──
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    function updateActiveLink() {
        let currentId = '';
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 120) {
                currentId = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + currentId) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', updateActiveLink, { passive: true });
    window.addEventListener('load', updateActiveLink);

    // ── Smooth scroll for nav links (already handled by data-bs, but add fallback) ──
    document.querySelectorAll('.navbar-nav .nav-link[href^="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    // Close mobile menu
                    const toggler = document.querySelector('.navbar-toggler');
                    const collapse = document.querySelector('.navbar-collapse');
                    if (collapse && collapse.classList.contains('show')) {
                        toggler.click();
                    }
                }
            }
        });
    });
})();