<?= $this->include('layouts/header') ?>

<section class="service-form-page py-5 sections">
    <div class="container">
        <h2 class="section-title text-center mb-4">BRGY Business Clearance / Permit Form</h2>
        <p class="text-center text-muted mb-5">
            Fill out the form below to request or renew your Barangay Business Clearance/Permit online.
        </p>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="<?= base_url('service/business-clearance-submit') ?>" method="POST" enctype="multipart/form-data">

                            <!-- Business Name -->
                            <div class="mb-3">
                                <label for="business_name" class="form-label">Business Name</label>
                                <input type="text" class="form-control" id="business_name" name="business_name" placeholder="Enter your business name" required>
                            </div>

                            <!-- Owner Name -->
                            <div class="mb-3">
                                <label for="owner_name" class="form-label">Owner Name</label>
                                <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Enter owner's full name" required>
                            </div>

                            <!-- Contact Number -->
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter contact number" required>
                            </div>

                            <!-- Business Address -->
                            <div class="mb-3">
                                <label for="business_address" class="form-label">Business Address</label>
                                <input type="text" class="form-control" id="business_address" name="business_address" placeholder="Enter business address" required>
                            </div>

                            <!-- File Upload -->
                            <div class="mb-3">
                                <label for="documents" class="form-label">Upload Required Document(s)</label>
                                <input type="file" class="form-control" id="documents" name="documents[]" multiple required>
                                <small class="text-muted">Accepted formats: JPG, PNG, PDF. Max size: 5MB per file.</small>
                            </div>

                            <!-- Purpose / Notes -->
                            <div class="mb-3">
                                <label for="purpose" class="form-label">Purpose / Notes</label>
                                <textarea class="form-control" id="purpose" name="purpose" rows="3" placeholder="State the purpose or additional notes" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary-custom px-5">Submit Request</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->include('layouts/footer') ?>
