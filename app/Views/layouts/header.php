<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Barangay Dolores | Official Website') ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/variable.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>"> 

</head>
<body>

<?php 
// Get current URI for active menu detection
$uri = service('uri');
$segment = $uri->getSegment(1);
?>
<head>
    
</head>
<nav class="navbar navbar-expand-lg navbar-custom ">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
            <div class="logo-wrapper">
                <img src="<?= base_url('assets/images/dolores_logo1.png') ?>" class="logo-image" alt="Barangay Dolores Logo">
            </div>
            <span class="brand-text">
                Barangay Dolores
                <small>Capas, Tarlac | Official Website</small>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link <?= (empty($segment) || $segment == '') ? 'active' : '' ?>" 
                       href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($segment == 'services') ? 'active' : '' ?>" 
                       href="<?= base_url('services') ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($segment == 'about') ? 'active' : '' ?>" 
                       href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#announcements">Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>