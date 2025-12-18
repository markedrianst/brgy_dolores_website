<?= $this->include('layouts/header') ?>

<section class="services-page py-5 margin-top-150 sections"  id="services">
    <div class="container">
        <h2 class="section-title text-center mb-4">Barangay Services</h2>
        <p class="text-center text-muted mb-5">
            Complete your requests online or visit the Barangay Hall for in-person processing.
        </p>

        <div class="row g-4 justify-content-center">

            <!-- BRGY ID REQUEST -->
            <div class="col-md-6">
                <div class="card service-detail shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h4 class="text-primary-custom">BRGY ID REQUEST</h4>
                        <p class="text-muted">Apply for your Barangay ID or community identification card.</p>
                        <div class="d-flex gap-3">
                        <a href="<?= base_url('services/id-online') ?>" class="btn btn-primary-custom btn-sm">Online Application</a>
                        <a href="#" class="btn btn-outline-primary btn-sm">Personal Application</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BRGY Business Clearance/Permit -->
            <div class="col-md-6">
                <div class="card service-detail shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h4 class="text-primary-custom">BRGY Business Clearance/Permit</h4>
                        <p class="text-muted">Apply or renew business clearance and permits in your barangay.</p>
                        <div class="d-flex gap-3">
                            <a href="<?= base_url('services/business-clearance-online') ?>" class="btn btn-primary-custom btn-sm">Online Form</a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Personal Application</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BRGY Certificate of Indigency -->
            <div class="col-md-6">
                <div class="card service-detail shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h4 class="text-primary-custom">BRGY Certificate of Indigency</h4>
                        <p class="text-muted">Request a Barangay Certificate of Indigency for official purposes.</p>
                        <div class="d-flex gap-3">
                            <a href="<?= base_url('services/indigency-online') ?>" class="btn btn-primary-custom btn-sm">Online Application</a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Personal Application</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BRGY Certificate of Residency -->
            <div class="col-md-6">
                <div class="card service-detail shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h4 class="text-primary-custom">BRGY Certificate of Residency</h4>
                        <p class="text-muted">Obtain your Certificate of Residency for official requirements.</p>
                        <div class="d-flex gap-3">
                            <a href="<?= base_url('services/residency-online') ?>" class="btn btn-primary-custom btn-sm">Online Application</a>
                            <a href="<?=base_url('template/template.docx')?>" class="btn btn-outline-primary btn-sm" download="Residency.docx">Personal Application</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certifications for specific purposes -->
            <div class="col-md-6">
                <div class="card service-detail shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h4 class="text-primary-custom">Certifications for Specific Purposes</h4>
                        <p class="text-muted">Request Barangay certifications for school, employment, or other purposes.</p>
                        <div class="d-flex gap-3">
                            <a href="<?= base_url('services/certification-online') ?>" class="btn btn-primary-custom btn-sm">Online Application</a>
                            <a href="<?=base_url('template/template.docx')?>" class="btn btn-outline-primary btn-sm" download="Dolores_Form.docx">
                                Personal Application
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Contact Block -->
        <div class="text-center mt-5">
            <h5>Need Assistance?</h5>
            <p class="text-muted">
                Contact us at <strong>info@barangaydolores.gov.ph</strong> or call <strong>(045) 123-4567</strong>
            </p>
        </div>
    </div>
</section>

<?= $this->include('layouts/footer') ?>
