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
<?php if (!empty($news)): ?>
<section class="news-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Latest News</h2>
        <div class="row g-4">
            <?php foreach ($news as $item): ?>
                <div class="col-md-4">
                    <div class="news-card">
                        <img src="<?= base_url('assets/images/' . $item['image']) ?>"
                             alt="<?= esc($item['alt']) ?>" class="img-fluid news-img">
                        <div class="news-content p-3">
                            <h5 class="news-title"><?= esc($item['title']) ?></h5>
                            <p class="news-date text-muted"><?= esc($item['date']) ?></p>
                            <p class="news-description"><?= esc($item['description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<style>
    .row.g-4 {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.col-md-4 {
    flex: 0 0 calc(33.333% - 1rem); 
    display: flex;
}
</style>

<?= $this->include('layouts/footer') ?>
