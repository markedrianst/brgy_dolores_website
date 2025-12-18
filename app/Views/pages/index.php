<?= $this->include('layouts/header') ?>

<!-- MAIN HERO CAROUSEL -->
<main class="sections" style="height: 85vh;" id="home">
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
          
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item h-100">
                    <div class="carousel-overlay"></div>
                    <img src="<?= base_url('assets/images/slide2.jpg') ?>"
                         class="d-block w-100 h-100"
                         style="object-fit: cover;"
                         alt="Barangay Services">
 
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item h-100">
                    <div class="carousel-overlay-light"></div>
                    <img src="<?= base_url('assets/images/dolores_logo.png') ?>"
                         class="d-block w-100 h-100"
                         style="object-fit: contain; background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%);"
                         alt="Barangay Dolores Logo">
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


<section class="hero-section" id="home">
    <div class="container">
        <div class="row align-items-center">

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
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="stat-card">
                            <i class="bi bi-people-fill"></i>
                            <h4>5,000+</h4>
                            <p>Residents Served</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="<?=base_url('services')?>" class="btn btn-primary-custom px-4 py-3">
                        Explore Our Services <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="<?=base_url('news_updates')?>" class="btn btn-outline-primary px-4 py-3">
                        <i class="bi bi-megaphone me-2"></i> News & Updates
                    </a>
                </div>
            </div>


            <div class="col-lg-6" data-aos="fade-left">
                <div class="hero-highlight mb-4">
                    <h5><i class="bi bi-megaphone-fill me-2"></i> Important Community Notice</h5>
                    <p class="mb-0">
                        Monthly Barangay Assembly scheduled for <strong>December 15, 2025 at 8:00 AM</strong>.
                        All residents are encouraged to attend.
                    </p>
                </div>
                
                <div class="modern-carousel rounded-4 overflow-hidden" style="height: 300px;">
                    <?php if(!empty($gallery_images) && count($gallery_images) > 0): ?>
                        <div id="barangayCarousel" class="carousel slide h-100" data-bs-ride="carousel" 
                            data-bs-interval="4000" data-bs-pause="hover">
                            
                            <?php if(count($gallery_images) > 1): ?>
                                <!-- Indicators/Dots -->
                                <div class="carousel-indicators">
                                    <?php foreach($gallery_images as $index => $image): ?>
                                        <button type="button" 
                                                data-bs-target="#barangayCarousel" 
                                                data-bs-slide-to="<?= $index ?>" 
                                                class="<?= $index === 0 ? 'active' : '' ?>"
                                                aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
                                                aria-label="Slide <?= $index + 1 ?>">
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Slides with fluid image container -->
                            <div class="carousel-inner h-100">
                                <?php foreach($gallery_images as $index => $image): ?>
                                    <div class="carousel-item h-100 <?= $index === 0 ? 'active' : '' ?>">
                                        <div class="h-100 position-relative overflow-hidden">
                                            <img src="<?= $image['path'] ?>" 
                                                class="img-fluid carousel-image-fitted"
                                                alt="Barangay Activity"
                                                style="
                                                    min-width: 100%;
                                                    min-height: 100%;
                                                    width: auto;
                                                    height: auto;
                                                    position: absolute;
                                                    top: 50%;
                                                    left: 50%;
                                                    transform: translate(-50%, -50%);
                                                    object-fit: cover;
                                                ">
                                            <!-- Optional: Add overlay for better text visibility -->
                                            <div class="carousel-image-overlay"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Navigation Arrows (only show if more than 1 image) -->
                            <?php if(count($gallery_images) > 1): ?>
                                <button class="carousel-control-prev" type="button" data-bs-target="#barangayCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#barangayCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <!-- Fallback if no images -->
                        <div class="h-100 d-flex align-items-center justify-content-center bg-light">
                            <div class="text-center">
                                <i class="bi bi-images text-muted display-4 mb-3"></i>
                                <h5>Barangay Gallery</h5>
                                <p class="text-muted">Images will appear here when added to gallery folder</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php if (!empty($news)): ?>
<section class="news-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Latest News</h2>
        <div class="row g-4 justify-content-center"> 
            <?php foreach ($news as $item): ?>
                <div class="col-md-6 d-flex"> <!-- 2 columns per row -->
                    <a href="<?= base_url('news_updates') ?>" class="text-decoration-none text-dark w-100">
                        <div class="news-card shadow-sm rounded overflow-hidden position-relative w-100">
                            <img src="<?= base_url('assets/images/' . $item['image']) ?>"
                                alt="<?= esc($item['alt']) ?>" class="img-fluid news-img">
                            <div class="news-content p-3 text-center bg-white">
                                <h5 class="news-title fw-bold"><?= esc($item['title']) ?></h5>
                                <p class="news-date text-muted small mb-2"><?= esc($item['date']) ?></p>
                                <p class="news-description text-truncate" style="max-height: 3em; overflow: hidden;">
                                    <?= esc($item['description']) ?>
                                </p>
                                <span class="read-more text-primary fw-semibold">Read More &rarr;</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
            <a href="<?=base_url('news_updates')?>" class="btn btn-primary-custom px-5 py-3">
                View More <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>


<section id="service-cards" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-badge mx-auto mb-3">
                <i class="bi bi-briefcase me-2"></i>
                Our Services
            </div>
            <h2 class="section-title text-center mb-4">Request Barangay Services</h2>

            <p class="text-muted fs-5">Quick access to essential barangay documents and certificates</p>
        </div>
        
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="<?=base_url('services')?>" class="text-decoration-none">
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
                <a href="<?=base_url('services')?>"class="text-decoration-none">
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
                <a href="<?=base_url('services')?>" class="text-decoration-none">
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
                <a href="<?=base_url('services')?>" class="text-decoration-none">
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
            <a href="<?=base_url('services')?>" class="btn btn-primary-custom px-5 py-3">
                View All Services <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>|

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

<?= $this->include('layouts/footer') ?>