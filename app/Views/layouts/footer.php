<!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="footer-logo">
                        <img 
                            src="<?= base_url('assets/images/dolores_logo.png') ?>" 
                            style="max-width: 120px;"
                        >    
                        <div class="footer-logo-text">
                            <h5>Barangay Dolores</h5>
                            <small>Capas, Tarlac | Official Website</small>
                        </div>
                    </div>
                    <p class="footer-description">
                        Committed to good governance, public service, and community development. 
                        We strive to create a progressive, safe, and empowered community for all residents of Barangay Dolores.
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>

                <div class="col-lg-2">
                    <h6 class="footer-title">Quick Links</h6>
                    <div class="footer-links">
                        <a href="<?= base_url() ?>">Home</a>
                        <a href="<?= base_url('services') ?>">Services</a>
                        <a href="<?= base_url('about') ?>">About Us</a>
                        <a href="#announcements">Announcements</a>
                        <a href="#events">Events</a>
                        <a href="#officials">Officials</a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <h6 class="footer-title">Contact Information</h6>
                    <div class="footer-contact">
                        <p><i class="bi bi-geo-alt"></i> Barangay Dolores, Capas, Tarlac 2315</p>
                        <p><i class="bi bi-telephone"></i> (045) 123-4567</p>
                        <p><i class="bi bi-phone"></i> +63 912 345 6789</p>
                        <p><i class="bi bi-envelope"></i> info@barangaydolores.gov.ph</p>
                        <p><i class="bi bi-clock"></i> Emergency Hotline: 911</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <h6 class="footer-title">Office Hours</h6>
                    <div class="footer-hours">
                        <p><strong>Monday - Friday:</strong><br>8:00 AM - 5:00 PM</p>
                        <p><strong>Saturday:</strong><br>8:00 AM - 12:00 PM</p>
                        <p><strong>Sunday:</strong><br>Closed</p>
                        <p class="small mt-2">*Emergency services available 24/7</p>
                    </div>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="row footer-bottom">
                <div class="col-md-6">
                    <p class="mb-0">© <span id="current-year">2025</span> Barangay Dolores, Capas, Tarlac. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-white-50 me-3">Privacy Policy</a>
                        <a href="#" class="text-white-50">Terms of Use</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" aria-label="Back to top">
        <i class="bi bi-arrow-up"></i>
    </button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>