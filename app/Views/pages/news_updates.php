<?= $this->include('layouts/header') ?>

<!-- HERO SECTION -->
<section class="about-hero parallax-section position-relative sections">
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
            <?php foreach ($news as $index => $item): ?>
                <div class="col-md-4">
                    <div class="news-card" data-bs-toggle="modal" data-bs-target="#newsModal<?= $index ?>">
                        <img src="<?= base_url('assets/images/' . $item['image']) ?>"
                             alt="<?= esc($item['alt']) ?>" class="img-fluid news-img">
                        <div class="news-content p-3">
                            <h5 class="news-title"><?= esc($item['title']) ?></h5>
                            <p class="news-date text-muted"><?= esc($item['date']) ?></p>
                            <p class="news-description"><?= esc($item['description']) ?></p>
                            <div class="read-more-btn">
                                <span class="text-primary">Read Full Story <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Modal for each news item -->
<?php foreach ($news as $index => $item): ?>
<div class="modal fade" id="newsModal<?= $index ?>" tabindex="-1" aria-labelledby="newsModalLabel<?= $index ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsModalLabel<?= $index ?>"><?= esc($item['title']) ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <img src="<?= base_url('assets/images/' . $item['image']) ?>" 
                             alt="<?= esc($item['alt']) ?>" 
                             class="img-fluid rounded modal-news-img">
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary"><?= esc($item['date']) ?></span>
                            <small class="text-muted">Barangay Dolores News</small>
                        </div>
                        <h4 class="mb-4"><?= esc($item['title']) ?></h4>
                        <div class="news-full-description">
                            <?= nl2br(esc($item['description'])) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="shareNews('<?= esc($item['title']) ?>')">
                    <i class="bi bi-share me-1"></i> Share
                </button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>

<style>
/* GRID SYSTEM */
.row.g-4 {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    margin-right: -0.75rem;
    margin-left: -0.75rem;
}

/* Default: 3 cards per row */
.col-md-4 {
    flex: 0 0 calc(33.333% - 1rem);
    max-width: calc(33.333% - 1rem);
    display: flex;
    padding: 0 0.75rem;
}

/* News card with click effect */
.news-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    flex: 1;
    width: 100%;
    height: 100%;
    cursor: pointer;
    position: relative;
}

.news-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

.news-card:hover .read-more-btn {
    color: var(--primary-red);
    transform: translateX(5px);
}

.news-card .news-img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.news-card:hover .news-img {
    transform: scale(1.03);
}

.news-card .news-content {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 1.25rem;
}

.news-card .news-title {
    font-size: 1.15rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: #0d3b66;
    line-height: 1.3;
}

.news-card .news-date {
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 0.75rem;
}

.news-card .news-description {
    font-size: 1rem;
    color: #495057;
    line-height: 1.6;
    flex: 1;
    margin-bottom: 1rem;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.read-more-btn {
    color: #0d3b66;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    margin-top: auto;
}

/* Modal Styles */
.modal-news-img {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.modal-header {
    background: linear-gradient(135deg, #f8f9fa, #ffffff);
    border-bottom: 2px solid var(--primary-red, #d32f2f);
}

.modal-title {
    color: #0d3b66;
    font-weight: 700;
}

.news-full-description {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #333;
    padding: 10px 0;
}

.news-full-description p {
    margin-bottom: 1rem;
}

.modal-footer .btn-primary {
    background-color: var(--primary-red, #d32f2f);
    border-color: var(--primary-red, #d32f2f);
}

.modal-footer .btn-primary:hover {
    background-color: #b71c1c;
    border-color: #b71c1c;
}

/* Animation for modal */
.modal.fade .modal-dialog {
    transform: translateY(-50px);
    transition: transform 0.3s ease-out;
}

.modal.show .modal-dialog {
    transform: translateY(0);
}

/* =====================
   RESPONSIVE BREAKPOINTS
===================== */

/* Large desktops (1200px and up) */
@media (min-width: 1200px) {
    .about-hero h1 {
        font-size: 3.5rem;
    }
    
    .about-hero p {
        font-size: 1.3rem;
    }
    
    .section-title {
        font-size: 2.5rem;
    }
    
    .modal-dialog {
        max-width: 900px;
    }
}

/* Medium devices (tablets, 768px to 1199px) */
@media (min-width: 768px) and (max-width: 1199px) {
    .about-hero {
        min-height: 55vh;
        padding: 70px 20px;
    }
    
    .about-hero h1 {
        font-size: 2.5rem;
    }
    
    .about-hero p {
        font-size: 1.1rem;
    }
    
    /* 2 cards per row on tablets */
    .col-md-4 {
        flex: 0 0 calc(50% - 1rem);
        max-width: calc(50% - 1rem);
    }
    
    .news-card .news-img {
        height: 180px;
    }
    
    .news-card .news-title {
        font-size: 1.15rem;
    }
    
    .modal-dialog {
        max-width: 90%;
        margin: 1.75rem auto;
    }
}

/* Small devices (landscape phones, 576px to 767px) */
@media (min-width: 576px) and (max-width: 767px) {
    .about-hero {
        min-height: 50vh;
        padding: 60px 20px;
        background-attachment: scroll;
    }
    
    .about-hero h1 {
        font-size: 2.25rem;
    }
    
    .about-hero p {
        font-size: 1rem;
    }
    
    /* 2 cards per row */
    .col-md-4 {
        flex: 0 0 calc(50% - 1rem);
        max-width: calc(50% - 1rem);
    }
    
    .news-section {
        padding: 3rem 0;
    }
    
    .section-title {
        font-size: 1.75rem;
    }
    
    .news-card .news-img {
        height: 160px;
    }
    
    .news-card .news-content {
        padding: 1.25rem;
    }
    
    .modal-dialog {
        max-width: 95%;
    }
    
    .modal-news-img {
        max-height: 300px;
    }
}

/* Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575px) {
    .about-hero {
        min-height: 45vh;
        padding: 50px 15px;
        background-attachment: scroll;
    }
    
    .about-hero h1 {
        font-size: 2rem;
        margin-bottom: 0.75rem;
    }
    
    .about-hero p {
        font-size: 0.95rem;
        line-height: 1.5;
    }
    
    /* 1 card per row on mobile */
    .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .row.g-4 {
        gap: 1rem;
    }
    
    .news-section {
        padding: 2.5rem 0;
    }
    
    .section-title {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        padding-bottom: 12px;
    }
    
    .section-title::after {
        width: 60px;
        height: 3px;
    }
    
    .news-card {
        border-radius: 10px;
    }
    
    .news-card .news-img {
        height: 180px;
    }
    
    .news-card .news-content {
        padding: 1.25rem;
    }
    
    .news-card .news-title {
        font-size: 1.15rem;
    }
    
    .news-card .news-description {
        font-size: 0.95rem;
        -webkit-line-clamp: 4;
    }
    
    .modal-dialog {
        margin: 0.5rem;
    }
    
    .modal-body {
        padding: 1rem;
    }
    
    .modal-news-img {
        max-height: 250px;
    }
    
    .modal-title {
        font-size: 1.1rem;
    }
    
    .news-full-description {
        font-size: 1rem;
    }
}

/* Very small devices (less than 375px) */
@media (max-width: 374px) {
    .about-hero {
        min-height: 40vh;
        padding: 40px 10px;
    }
    
    .about-hero h1 {
        font-size: 1.75rem;
    }
    
    .about-hero p {
        font-size: 0.9rem;
    }
    
    .section-title {
        font-size: 1.35rem;
    }
    
    .news-card .news-img {
        height: 150px;
    }
    
    .news-card .news-content {
        padding: 1rem;
    }
    
    .news-card .news-title {
        font-size: 1.1rem;
    }
    
    .news-card .news-description {
        font-size: 0.9rem;
    }
    
    .modal-news-img {
        max-height: 200px;
    }
}

/* Reduce motion for accessibility */
@media (prefers-reduced-motion: reduce) {
    .about-hero {
        background-attachment: scroll;
    }
    
    .news-card,
    .news-card .news-img {
        transition: none;
    }
    
    .news-card:hover {
        transform: none;
    }
    
    .modal.fade .modal-dialog {
        transition: none;
    }
}
</style>

<script>
// Function to share news (optional feature)
function shareNews(title) {
    if (navigator.share) {
        navigator.share({
            title: title,
            text: 'Check out this news from Barangay Dolores',
            url: window.location.href
        })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing:', error));
    } else {
        // Fallback: Copy to clipboard
        navigator.clipboard.writeText(window.location.href)
            .then(() => {
                alert('Link copied to clipboard!');
            })
            .catch(err => {
                console.error('Failed to copy: ', err);
            });
    }
}

// Optional: Add keyboard navigation for modals
document.addEventListener('keydown', function(e) {
    const modals = document.querySelectorAll('.modal.show');
    if (modals.length > 0 && e.key === 'Escape') {
        const modal = modals[0];
        const closeBtn = modal.querySelector('.btn-close');
        if (closeBtn) closeBtn.click();
    }
});
</script>

<?= $this->include('layouts/footer') ?>