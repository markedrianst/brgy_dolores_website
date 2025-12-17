document.addEventListener('DOMContentLoaded', () => {
    let initialPage = 'home'; // default
    const pathSegment = window.location.pathname.split('/').pop(); 

    if (pathSegment && pathSegment !== '') {
        initialPage = pathSegment; 
    }

    loadStaticContent(initialPage, false);

    const container = document.getElementById('main-content');
    const nav = document.querySelector('.navbar');

    function handleNavClick(event) {
        const link = event.target.closest('.nav-link, .btn-simple, .btn-outline-simple');
        if (!link) return;

        event.preventDefault();

        const page = link.dataset.page;
        if (!page) return;


        document.querySelectorAll('.nav-link, .btn-simple, .btn-outline-simple').forEach(l => l.classList.remove('active'));
        link.classList.add('active');

        fadeContent(() => loadStaticContent(page, true));
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    nav.addEventListener('click', handleNavClick);
    container.addEventListener('click', handleNavClick);

    window.addEventListener('popstate', (event) => {
        const page = event.state?.page || 'home';
        loadStaticContent(page, false);
        updateActiveNav(page);
    });
});

function loadStaticContent(page, pushState = true) {

    fetch(`Home/sections/${page}`)
        .then(res => res.text())
        .then(html => {
            const container = document.getElementById('main-content');
            container.innerHTML = html;

            triggerAnimations();
            if (page === 'rooms') {
                    initRoomsPage(); // <-- initialize rooms here
                }
                
                if (pushState) {
                window.history.pushState({ page }, '', page);
            }

            updateActiveNav(page);
        })
        .catch(err => console.error(err));
}

function fadeContent(callback) {
    const content = document.getElementById('main-content');
    if (!content) { callback(); return; }
    content.style.opacity = 0;
    setTimeout(() => {
        callback();
        setTimeout(() => { content.style.opacity = 1; }, 100);
    }, 200);
}

function triggerAnimations() {
    const animatedElements = document.querySelectorAll(
        '.section-title, .room-card, .pool-content, .pool-image, .event-image, ' +
        '.services-list li, .contact-info, .contact-item, .amenities-section, ' +
        '.amenity-item, #contactForm, .fade-in, .fade-in-image'
    );

    animatedElements.forEach((el, index) => {
        el.classList.remove('animated');
        void el.offsetWidth;
        setTimeout(() => el.classList.add('animated'), index * 80);
    });

    document.querySelectorAll('.contact-info').forEach(container => {
        const items = container.querySelectorAll('.contact-item');
        items.forEach((item, i) => setTimeout(() => item.classList.add('animated'), i * 100));
    });

    document.querySelectorAll('.amenities-section').forEach(container => {
        const items = container.querySelectorAll('.amenity-item');
        items.forEach((item, i) => setTimeout(() => item.classList.add('animated'), i * 100));
    });
}

function updateActiveNav(page) {
    const navLinks = document.querySelectorAll('.nav-link, .btn-simple, .btn-outline-simple');
    navLinks.forEach(link => {
        link.classList.remove('active');
        const linkPage = link.getAttribute('data-page') || link.getAttribute('href');
        if (linkPage === page) {
            link.classList.add('active');
        }
    });
}
