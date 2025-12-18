<?= $this->include('layouts/header') ?>

<!-- MAIN HERO CAROUSEL -->
<main style="height: 85vh; margin-top: 100px;">
    <div class="container-fluid p-0 h-100">
        <div id="myCarousel"
             class="carousel slide h-100"
             data-bs-ride="carousel"
             data-bs-interval="4000">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner h-100">
                <!-- Slide 1 -->
                <div class="carousel-item active h-100">
                    <div class="carousel-overlay"></div>
                    <img src="<?= base_url('assets/images/slide1.jpg') ?>"
                         class="d-block w-100 h-100"
                         style="object-fit: cover;"
                         alt="Barangay Dolores Community">
                    <div class="carousel-caption-custom d-flex flex-column justify-content-center align-items-start">
                        <h5 class="carousel-title" data-aos="fade-up">Welcome to Barangay Dolores</h5>
                        <p class="carousel-text" data-aos="fade-up" data-aos-delay="100">
                            Building a progressive and empowered community
                        </p>
                        <a href="#services" class="btn btn-primary-custom mt-3" data-aos="fade-up" data-aos-delay="200">
                            Explore Services <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item h-100">
                    <div class="carousel-overlay"></div>
                    <img src="<?= base_url('assets/images/slide2.jpg') ?>"
                         class="d-block w-100 h-100"
                         style="object-fit: cover;"
                         alt="Barangay Services">
                    <div class="carousel-caption-custom d-flex flex-column justify-content-center align-items-start">
                        <h5 class="carousel-title">Committed to Excellence</h5>
                        <p class="carousel-text">
                            Transparent governance and quality public service
                        </p>
                        <a href="#about" class="btn btn-outline-light mt-3">
                            Learn More <i class="bi bi-info-circle ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item h-100">
                    <div class="carousel-overlay-light"></div>
                    <img src="<?= base_url('assets/images/dolores_logo.png') ?>"
                         class="d-block w-100 h-100"
                         style="object-fit: contain; background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%);"
                         alt="Barangay Dolores Logo">
                    <div class="carousel-caption-custom d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="carousel-title text-dark">Barangay Dolores</h5>
                        <p class="carousel-text text-dark">
                            Capas, Tarlac | Your Partner in Progress
                        </p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button"
                    data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button"
                    data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
</main>

<!-- HERO SECTION WITH INFO -->
<section class="hero-section" id="home">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- LEFT CONTENT -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-badge mb-3">
                    <i class="bi bi-award-fill me-2"></i>
                    Official Barangay Website
                </div>
                <h1 class="hero-title">
                    Welcome to <span>Barangay Dolores</span>
                </h1>
                <p class="hero-subtitle">
                    Your trusted local government unit in Capas, Tarlac committed to transparent governance, 
                    excellent public service, and sustainable community development. 
                    We serve with integrity, compassion, and dedication to build a better community for all.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#services" class="btn btn-primary-custom px-4 py-3">
                        Explore Our Services <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#announcements" class="btn btn-outline-primary px-4 py-3">
                        <i class="bi bi-megaphone me-2"></i> Latest Announcements
                    </a>
                </div>

                <!-- Stats Cards -->
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="stat-card">
                            <i class="bi bi-people-fill"></i>
                            <h4>5,000+</h4>
                            <p>Residents Served</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <i class="bi bi-file-earmark-check"></i>
                            <h4>10,000+</h4>
                            <p>Documents Processed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: BARANGAY CAROUSEL & ANNOUNCEMENT -->
            <div class="col-lg-6" data-aos="fade-left">
                <!-- Community Carousel -->
                <div id="barangayCarousel"
                     class="carousel slide modern-carousel shadow-lg mb-4"
                     data-bs-ride="carousel"
                     data-bs-interval="5000">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#barangayCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#barangayCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#barangayCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('images/barangay/barangay1.jpg') ?>" class="d-block w-100" alt="Barangay Dolores">
                            <div class="carousel-caption d-flex flex-column justify-content-end pb-4">
                                <h5 class="mb-1">Barangay Dolores</h5>
                                <p class="mb-0">Community and public service</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url('images/barangay/barangay2.jpg') ?>" class="d-block w-100" alt="Barangay Hall">
                            <div class="carousel-caption d-flex flex-column justify-content-end pb-4">
                                <h5 class="mb-1">Barangay Hall</h5>
                                <p class="mb-0">Local governance center</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url('images/barangay/barangay3.jpg') ?>" class="d-block w-100" alt="Community Programs">
                            <div class="carousel-caption d-flex flex-column justify-content-end pb-4">
                                <h5 class="mb-1">Community Programs</h5>
                                <p class="mb-0">Unity and participation</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#barangayCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#barangayCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

                <!-- Important Notice Card -->
                <div class="hero-highlight">
                    <h5><i class="bi bi-megaphone-fill me-2"></i> Important Community Notice</h5>
                    <p class="mb-0">
                        Monthly Barangay Assembly scheduled for <strong>December 15, 2025 at 8:00 AM</strong>.
                        All residents are encouraged to attend.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES REQUEST CARDS -->
<section id="service-cards" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-badge mx-auto mb-3">
                <i class="bi bi-briefcase me-2"></i>
                Our Services
            </div>
            <h2 class="section-title">Request Barangay Services</h2>
            <p class="text-muted fs-5">Quick access to essential barangay documents and certificates</p>
        </div>
        
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="#services" class="text-decoration-none">
                    <div class="service-request-card">
                        <div class="service-request-icon">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <h5 class="service-request-title">Barangay ID</h5>
                        <p class="service-request-desc">Request your official barangay identification card</p>
                        <div class="service-request-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Service Card 2 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <a href="#services" class="text-decoration-none">
                    <div class="service-request-card">
                        <div class="service-request-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h5 class="service-request-title">Business Permit</h5>
                        <p class="service-request-desc">Apply for barangay business clearance and permits</p>
                        <div class="service-request-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Service Card 3 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <a href="#services" class="text-decoration-none">
                    <div class="service-request-card">
                        <div class="service-request-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h5 class="service-request-title">Indigency Certificate</h5>
                        <p class="service-request-desc">Request certificate of indigency for assistance</p>
                        <div class="service-request-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Service Card 4 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <a href="#services" class="text-decoration-none">
                    <div class="service-request-card">
                        <div class="service-request-icon">
                            <i class="bi bi-house"></i>
                        </div>
                        <h5 class="service-request-title">Residency Certificate</h5>
                        <p class="service-request-desc">Get your certificate of residency quickly</p>
                        <div class="service-request-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- View All Services Button -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
            <a href="#services" class="btn btn-primary-custom px-5 py-3">
                View All Services <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- QUICK INFO SECTION -->
<!-- QUICK INFO SECTION -->
<section class="quick-info-section py-5">
    <div class="container ">
        <div class="row g-4 justify-content-center">
            
            <!-- Emergency Hotline -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="info-card emergency">
                    <div class="info-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h5>Emergency Hotline</h5>
                    <p class="info-number">911</p>
                    <small>24/7 Emergency Response</small>
                </div>
            </div>

            <!-- Office Hours -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <h5>Office Hours</h5>
                    <p class="mb-1"><strong>Mon-Fri:</strong> 8:00 AM - 5:00 PM</p>
                    <p><strong>Sat:</strong> 8:00 AM - 12:00 PM</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Main Carousel Modern Styling */
#myCarousel .carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(211, 47, 47, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
    z-index: 1;
}

#myCarousel .carousel-overlay-light {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.1);
    z-index: 1;
}

.carousel-caption-custom {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 2rem;
    z-index: 2;
}

.carousel-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}

.carousel-text {
    font-size: 1.25rem;
    margin-bottom: 0;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
}

.btn-outline-light {
    border: 2px solid white;
    color: white;
    padding: 0.9rem 2.5rem;
    font-weight: 600;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.btn-outline-light:hover {
    background: white;
    color: var(--primary-red);
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
}

/* Hero Badge */
.hero-badge {
    display: inline-block;
    padding: 0.5rem 1.25rem;
    background: linear-gradient(135deg, rgba(211, 47, 47, 0.1), rgba(211, 47, 47, 0.05));
    border: 2px solid rgba(211, 47, 47, 0.2);
    border-radius: 50px;
    color: var(--primary-red);
    font-weight: 600;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
}

/* Stats Cards */
.stat-card {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
    backdrop-filter: blur(10px);
    padding: 1.5rem;
    border-radius: 16px;
    text-align: center;
    border: 2px solid rgba(211, 47, 47, 0.1);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(211, 47, 47, 0.2);
    border-color: rgba(211, 47, 47, 0.3);
}

.stat-card i {
    font-size: 2rem;
    color: var(--primary-red);
    margin-bottom: 0.5rem;
}

.stat-card h4 {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary-red);
    margin: 0.5rem 0;
}

.stat-card p {
    font-size: 0.9rem;
    color: var(--medium-gray);
    margin: 0;
}

/* Modern Carousel for Barangay */
.modern-carousel {
    border-radius: 24px;
    overflow: hidden;
    border: 3px solid rgba(211, 47, 47, 0.1);
}

/* Section Badge */
.section-badge {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: linear-gradient(135deg, var(--primary-red), #ff6b6b);
    color: white;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
}

/* Service Request Cards - Modern Design */
.service-request-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    height: 100%;
    border: 2px solid rgba(211, 47, 47, 0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.service-request-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-red), #ff6b6b);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-request-card:hover::before {
    transform: scaleX(1);
}

.service-request-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(211, 47, 47, 0.2);
    border-color: rgba(211, 47, 47, 0.3);
}

.service-request-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, rgba(211, 47, 47, 0.1), rgba(211, 47, 47, 0.05));
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
}

.service-request-card:hover .service-request-icon {
    background: linear-gradient(135deg, var(--primary-red), #ff6b6b);
    transform: scale(1.1) rotate(-5deg);
}

.service-request-icon i {
    font-size: 2rem;
    color: var(--primary-red);
    transition: color 0.3s ease;
}

.service-request-card:hover .service-request-icon i {
    color: white;
}

.service-request-title {
    color: var(--dark-gray);
    font-weight: 700;
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
}

.service-request-desc {
    color: var(--medium-gray);
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.service-request-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(211, 47, 47, 0.1);
    border-radius: 50%;
    color: var(--primary-red);
    transition: all 0.3s ease;
}

.service-request-card:hover .service-request-arrow {
    background: var(--primary-red);
    color: white;
    transform: translateX(5px);
}

/* Quick Info Section */
.quick-info-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.info-card {
    background: white;
    border-radius: 20px;
    padding: 2.5rem 2rem;
    text-align: center;
    border: 2px solid rgba(211, 47, 47, 0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.info-card.emergency {
    background: linear-gradient(135deg, rgba(211, 47, 47, 0.05), rgba(255, 107, 107, 0.05));
    border-color: rgba(211, 47, 47, 0.2);
}

.info-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(211, 47, 47, 0.15);
}

.info-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-red), #ff6b6b);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    box-shadow: 0 4px 20px rgba(211, 47, 47, 0.3);
}

.info-icon i {
    font-size: 1.75rem;
    color: white;
}

.info-card h5 {
    font-weight: 700;
    color: var(--dark-gray);
    margin-bottom: 1rem;
}

.info-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary-red);
    margin: 1rem 0;
}

.info-card small {
    color: var(--medium-gray);
    font-size: 0.85rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .carousel-title {
        font-size: 2rem;
    }
    
    .carousel-text {
        font-size: 1rem;
    }
    
    .carousel-caption-custom {
        padding: 1rem;
    }
    
    .stat-card h4 {
        font-size: 1.5rem;
    }
    
    .info-number {
        font-size: 2rem;
    }
}
</style>

<?= $this->include('layouts/footer') ?>