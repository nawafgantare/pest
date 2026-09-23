<?php
$pageTitle = "Blog & Knowledge Base";
$activePage = "blog";
require_once __DIR__ . '/includes/header.php';
?>

<section style="background: var(--color-secondary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="color: white; font-size: 2.5rem; margin-bottom: 10px;">Pest Control Blog & News</h1>
        <p style="color: rgba(255,255,255,0.8);">Expert Tips, Prevention Guides & Pest Identification Articles</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container">
        <div class="services-grid">
            <article class="service-card">
                <img src="assets/images/termite-control.png" alt="Termite Signs" class="service-card-img">
                <div class="service-card-body">
                    <span style="font-size: 0.8rem; color: var(--color-primary); font-weight: 600;">PREVENTION GUIDE</span>
                    <h3 class="service-card-title" style="margin-top: 5px;">5 Early Warning Signs of Termite Infestation in Wooden Doors</h3>
                    <p class="service-card-text">Learn how to spot hollow wooden sounds, mud tubes, and discarded swarmer wings before termites destroy your expensive furniture.</p>
                    <a href="#" class="btn btn-outline" style="align-self: flex-start;" data-open-modal data-service="Blog - Termite Guide">Read Guide</a>
                </div>
            </article>

            <article class="service-card">
                <img src="assets/images/cockroach-control.png" alt="Kitchen Hygiene" class="service-card-img">
                <div class="service-card-body">
                    <span style="font-size: 0.8rem; color: var(--color-primary); font-weight: 600;">HOME SAFETY</span>
                    <h3 class="service-card-title" style="margin-top: 5px;">Why Home Remedies Fail Against Kitchen Cockroaches</h3>
                    <p class="service-card-text">Discover why boric acid and sprays only kill 10% of visible cockroaches while colonies continue breeding behind cabinets.</p>
                    <a href="#" class="btn btn-outline" style="align-self: flex-start;" data-open-modal data-service="Blog - Cockroach Article">Read Article</a>
                </div>
            </article>

            <article class="service-card">
                <img src="assets/images/bed-bug-treatment.png" alt="Bed Bug Prevention" class="service-card-img">
                <div class="service-card-body">
                    <span style="font-size: 0.8rem; color: var(--color-primary); font-weight: 600;">TRAVEL TIPS</span>
                    <h3 class="service-card-title" style="margin-top: 5px;">How to Avoid Bringing Bed Bugs Home From Hotel Stay</h3>
                    <p class="service-card-text">Essential luggage checking steps and hotel room inspection checklist to protect your home from bed bug hitches.</p>
                    <a href="#" class="btn btn-outline" style="align-self: flex-start;" data-open-modal data-service="Blog - Bed Bug Tips">Read Guide</a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
