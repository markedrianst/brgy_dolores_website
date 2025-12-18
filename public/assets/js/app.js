// Navigation and Smooth Scrolling with Scroll Spy
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id], main[id]');
    const navbar = document.querySelector('.navbar-custom');
    
    let lastScrollTop = 0;
    const scrollThreshold = 5; // Minimum scroll amount to trigger hide/show
    
    // Smooth scrolling for anchor links (same-page navigation)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if(targetId === '#' || targetId === '') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                e.preventDefault();
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Scroll Spy: Update active nav link based on scroll position
    function updateActiveNavOnScroll() {
        const scrollPosition = window.scrollY + 150;
        
        let currentSection = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            
            if (href.startsWith('#')) {
                link.classList.remove('active');
                
                if (href === `#${currentSection}`) {
                    link.classList.add('active');
                }
            }
        });
    }
    
    // Auto-hide/show navbar on scroll
    function handleNavbarVisibility() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Always show navbar at the very top of the page
        if (scrollTop <= 100) {
            navbar.classList.remove('navbar-hidden');
            navbar.classList.add('navbar-visible');
        }
        // Hide navbar when scrolling down
        else if (scrollTop > lastScrollTop + scrollThreshold) {
            navbar.classList.remove('navbar-visible');
            navbar.classList.add('navbar-hidden');
        }
        // Show navbar ONLY when scrolling up
        else if (scrollTop < lastScrollTop - scrollThreshold) {
            navbar.classList.remove('navbar-hidden');
            navbar.classList.add('navbar-visible');
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }
    
    // Combined scroll handler with throttling
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (scrollTimeout) {
            window.cancelAnimationFrame(scrollTimeout);
        }
        scrollTimeout = window.requestAnimationFrame(function() {
            updateActiveNavOnScroll();
            handleNavbarVisibility();
            
            // Update navbar shadow
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
            } else {
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.08)';
            }
        });

         document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-up');
                    }
                });
            }, observerOptions);

            // Observe all elements with fade-in classes
            document.querySelectorAll('.fade-in-up, .delay-1, .delay-2, .delay-3').forEach(el => {
                observer.observe(el);
            });

            // Simple parallax effect
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.parallax-section');
                
                parallaxElements.forEach(element => {
                    const rate = scrolled * 0.5;
                    element.style.backgroundPosition = `center ${rate}px`;
                });
            });
        });
    });
    
    // Run once on page load
    updateActiveNavOnScroll();
    
    // Auto-update copyright year
    const yearSpan = document.querySelector('#current-year');
    if(yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }
    
    // Back to Top Button (if you have one)
    const backToTopBtn = document.querySelector('.back-to-top');
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Show/hide back to top button
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });
    }
});
