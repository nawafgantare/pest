<?php
$pageTitle = "Pest Control Services";
$activePage = "services";
require_once __DIR__ . '/includes/header.php';
?>

<section style="background: var(--color-secondary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="color: white; font-size: 2.5rem; margin-bottom: 10px;">Our Pest Control Services</h1>
        <p style="color: rgba(255,255,255,0.8);">Comprehensive, Target-Specific Pest Management Solutions</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container">
        <div class="services-grid">
            <div class="service-card">
                <img src="assets/images/cockroach-control.png" alt="Cockroach Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Cockroach Control</h3>
                    <p class="service-card-text">Odorless gel baiting and spray treatment targeting German and American cockroaches in kitchens and food areas.</p>
                    <a href="service-detail.php?type=cockroach" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/termite-control.png" alt="Termite Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Termite Control</h3>
                    <p class="service-card-text">Advanced drill-fill-seal subterranean termite treatment protecting wooden structures and foundations.</p>
                    <a href="service-detail.php?type=termite" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/bed-bug-treatment.png" alt="Bed Bug Treatment" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Bed Bug Treatment</h3>
                    <p class="service-card-text">Two-stage intensive spray and egg eradication treatment for mattresses, beds, and furniture.</p>
                    <a href="service-detail.php?type=bed-bug" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/rodent-control.png" alt="Rodent Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Rodent & Rat Control</h3>
                    <p class="service-card-text">Multi-catch glue stations and eco-friendly baiting to eliminate rats, mice, and bandicoots.</p>
                    <a href="service-detail.php?type=rodent" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/mosquito-control.png" alt="Mosquito Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Mosquito Control</h3>
                    <p class="service-card-text">Thermal fogging and anti-larval spray to prevent dengue, malaria, and chikungunya outbreaks.</p>
                    <a href="service-detail.php?type=mosquito" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/wood-borer-treatment.png" alt="Wood Borer Treatment" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Wood Borer Treatment</h3>
                    <p class="service-card-text">Syringe chemical injection into wood borer exit holes to save valuable furniture.</p>
                    <a href="service-detail.php?type=wood-borer" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/spider-control.png" alt="Spider Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Spider Pest Control</h3>
                    <p class="service-card-text">Thorough cobweb removal and perimeter chemical barrier to keep premises spider-free.</p>
                    <a href="service-detail.php?type=spider" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/lizard-control.png" alt="Lizard Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Lizard Pest Control</h3>
                    <p class="service-card-text">Specialized lizard repellent contact sprays to deter house geckos and wall lizards.</p>
                    <a href="service-detail.php?type=lizard" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/fly-control.png" alt="Fly Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Fly Control</h3>
                    <p class="service-card-text">Integrated fly management including UV fly catchers and breeding site disinfection.</p>
                    <a href="service-detail.php?type=fly" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>

            <div class="service-card">
                <img src="assets/images/bee-wasp-removal.png" alt="Bee Wasp Removal" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Bee & Wasp Removal</h3>
                    <p class="service-card-text">Safe and humane beehive relocation by trained specialists with full protective gear.</p>
                    <a href="service-detail.php?type=bee-wasp" class="btn btn-outline" style="align-self: flex-start;">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
