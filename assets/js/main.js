// Smart Electrical GB - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const header = document.querySelector('header');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            header.classList.toggle('mobile-menu-open');
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (header.classList.contains('mobile-menu-open')) {
                    header.classList.remove('mobile-menu-open');
                }
            }
        });
    });
});
