     // Navigation and Smooth Scrolling
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            
            // Active navigation highlighting
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if(targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if(targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Auto-update copyright year
            const yearSpan = document.querySelector('#current-year');
            if(yearSpan) {
                yearSpan.textContent = new Date().getFullYear();
            }
        });
        
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
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