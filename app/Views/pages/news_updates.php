<?= $this->include('layouts/header') ?>

<!-- HERO SECTION -->
<section class="news-hero parallax-section position-relative">
    <!-- Overlay -->
    <div class="parallax-overlay"></div>

    <div class="parallax-content text-center">
        <h1>News & Updates</h1>
        <p>Stay informed about the latest events and announcements in Barangay Dolores</p>
    </div>
</section>
<!-- NEWS SECTION -->
<section class="news-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Latest News</h2>
        <div class="row g-4">

            <!-- News Card 1 -->
            <div class="col-md-4">
                <div class="news-card">
                    <img src="<?= base_url('assets/images/pms.jpg') ?>"
                         alt="News 1" class="img-fluid news-img">
                    <div class="news-content p-3">
                        <h5 class="news-title">Parol Making Contest</h5>
                        <p class="news-date text-muted">December 16, 2025</p>
                        <p class="news-description">
                            Sa pangalawang taon na proyekto ng ating Brgy Council at Dolores Elementary School matagumpay  at masaya naidaos ang PAROL MAKING CONTEST. Makikita sa ngiti ng bawat isa ang saya at Pagkakaisa ng mga guro, magulang at mga istudyante.
                        </p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card 2 -->
            <div class="col-md-4">
                <div class="news-card">
                   <img src="<?= base_url('assets/images/a_rabies.jpg') ?>"
                         alt="News 2" class="img-fluid news-img">
                    <div class="news-content p-3">
                        <h5 class="news-title">Anti Rabies Vaccination</h5>
                        <p class="news-date text-muted">October 16, 2025</p>
                        <p class="news-description">
Matagumpay isinagawa last October 16, 2025 ang pagbibigay anti rabbies vaccination sa mga alagang aso at pusa sa ating Barangay.  Pinangunahan ng Capas Municipal Vetinerary Office  Team headed by  Dr. Hensly Hope A. Baun, student Volunteers , Brgy Council at mga Bpats.                        </p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card 3 -->
            <div class="col-md-4">
                <div class="news-card">
                        <img src="<?= base_url('assets/images/clean.jpg') ?>"
                         alt="News 3" class="img-fluid news-img">
                    <div class="news-content p-3">
                        <h5 class="news-title">Weekly Clean Up Drive</h5>
                        <p class="news-date text-muted">October 10, 2025</p>
                        <p class="news-description">
                        Weekly Clean Up Drive
                        KALINISAN ang isa sa prioridad ng ating Brgy Council. Salamat sa mga volunteers at sa mga kabarangay na nakikiisa.
                        " Cleanliness is next to Godliness" </p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .row.g-4 {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

/* COLUMN - 3 per row */
.col-md-4 {
    flex: 0 0 calc(33.333% - 1rem); /* 3 columns with gap adjustment */
    display: flex;
}
</style>

<?= $this->include('layouts/footer') ?>
