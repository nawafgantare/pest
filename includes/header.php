<?php
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' | ' . APP_NAME : APP_NAME . ' - Professional Pest Control Solutions' ?></title>
    <meta name="description" content="Safe, eco-friendly, and effective pest control management for residential, commercial, and industrial spaces across Navi Mumbai and Pan India.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Topbar -->
<div class="topbar">
    <div class="container">
        <div class="topbar-info">
            <a href="tel:<?= str_replace(' ', '', APP_PHONE) ?>">📞 <?= APP_PHONE ?></a>
            <a href="mailto:<?= APP_EMAIL ?>">✉️ <?= APP_EMAIL ?></a>
            <span>📍 <?= APP_ADDRESS ?></span>
        </div>
        <div class="topbar-right">
            <span>🛡️ Verified & Certified Technicians</span>
            <a href="crm.php" class="topbar-crm-btn">CRM Login</a>
        </div>
    </div>
</div>

<!-- Main Header Navigation -->
<header class="site-header">
    <div class="container navbar">
        <a href="index.php" class="brand-logo">
            <img src="assets/images/spc-logo.png" alt="Shakti Pest Control Logo">
        </a>

        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
            ☰
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php" class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>">Home</a></li>
            <li><a href="about-us.php" class="nav-link <?= ($activePage ?? '') === 'about' ? 'active' : '' ?>">About Us</a></li>

            <li class="has-dropdown">
                <a href="services.php" class="nav-link <?= ($activePage ?? '') === 'services' ? 'active' : '' ?>">Services ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="service-detail.php?type=spider" class="dropdown-item">Spider Pest Control</a></li>
                    <li><a href="service-detail.php?type=lizard" class="dropdown-item">Lizard Pest Control</a></li>
                    <li><a href="service-detail.php?type=fly" class="dropdown-item">Fly Control</a></li>
                    <li><a href="service-detail.php?type=bee-wasp" class="dropdown-item">Bee & Wasp Removal</a></li>
                    <li><a href="service-detail.php?type=wood-borer" class="dropdown-item">Wood Borer Treatment</a></li>
                    <li><a href="service-detail.php?type=cockroach" class="dropdown-item">Cockroach Control</a></li>
                    <li><a href="service-detail.php?type=ant" class="dropdown-item">Ant Control</a></li>
                    <li><a href="service-detail.php?type=mosquito" class="dropdown-item">Mosquito Control</a></li>
                    <li><a href="service-detail.php?type=bed-bug" class="dropdown-item">Bed Bug Treatment</a></li>
                    <li><a href="service-detail.php?type=rodent" class="dropdown-item">Rodent Control</a></li>
                    <li><a href="service-detail.php?type=termite" class="dropdown-item">Termite Control</a></li>
                </ul>
            </li>

            <li class="has-dropdown">
                <a href="#" class="nav-link <?= ($activePage ?? '') === 'sectors' ? 'active' : '' ?>">Sectors ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="residential-pest-control.php" class="dropdown-item">Residential Pest Control</a></li>
                    <li><a href="commercial-pest-control.php" class="dropdown-item">Commercial Pest Control</a></li>
                    <li><a href="industrial-pest-control.php" class="dropdown-item">Industrial Pest Control</a></li>
                </ul>
            </li>

            <li><a href="blog.php" class="nav-link <?= ($activePage ?? '') === 'blog' ? 'active' : '' ?>">Blog</a></li>
            <li><a href="contact-us.php" class="nav-link <?= ($activePage ?? '') === 'contact' ? 'active' : '' ?>">Contact Us</a></li>

            <li>
                <a href="#" class="btn btn-primary" data-open-modal data-service="General Quote">Get Free Quote</a>
            </li>
        </ul>
    </div>
</header>
