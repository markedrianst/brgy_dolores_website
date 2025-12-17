<?= $this->include('layouts/header') ?>

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-7">
                <h1 class="hero-title">Welcome to <span>Barangay Dolores</span></h1>
                <p class="hero-subtitle">
                    Your trusted local government unit in Capas, Tarlac committed to transparent governance, 
                    excellent public service, and sustainable community development. 
                    We serve with integrity, compassion, and dedication to build a better community for all.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#services" class="btn btn-primary-custom px-4 py-3">
                        Explore Our Services <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#announcements" class="btn btn-outline-primary px-4 py-3">
                        Latest Announcements
                    </a>
                </div>

                <div class="hero-highlight">
                    <h5><i class="bi bi-megaphone-fill me-2"></i> Important Community Notice</h5>
                    <p class="mb-0">
                        Monthly Barangay Assembly scheduled for December 15, 2025 at 8:00 AM.
                        All residents are encouraged to attend.
                    </p>
                </div>
            </div>

            <!-- RIGHT: BARANGAY CAROUSEL -->
            <div class="col-lg-5 mt-5 mt-lg-0">

                <div id="barangayCarousel"
                     class="carousel slide shadow rounded-4 overflow-hidden"
                     data-bs-ride="carousel"
                     data-bs-interval="4000">

                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#barangayCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#barangayCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#barangayCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('images/barangay/barangay1.jpg') ?>" class="d-block w-100" alt="Barangay Dolores">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Barangay Dolores</h5>
                                <p>Community and public service</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url('images/barangay/barangay2.jpg') ?>" class="d-block w-100" alt="Barangay Hall">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Barangay Hall</h5>
                                <p>Local governance center</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url('images/barangay/barangay3.jpg') ?>" class="d-block w-100" alt="Community Programs">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Community Programs</h5>
                                <p>Unity and participation</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#barangayCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#barangayCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->include('layouts/footer') ?>
