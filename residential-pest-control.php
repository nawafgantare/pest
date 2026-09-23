<?php
$pageTitle = "Residential Pest Control Services";
$activePage = "sectors";
require_once __DIR__ . '/includes/header.php';
?>

<section style="background: var(--color-secondary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="color: white; font-size: 2.5rem; margin-bottom: 10px;">Residential Pest Control Solutions</h1>
        <p style="color: rgba(255,255,255,0.8);">Safe, Non-Toxic & Pet-Friendly Pest Protection for Your Family</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 50px; align-items: center;">
        <div>
            <span class="section-tag">Home Protection</span>
            <h2 class="section-title">Keep Your Home Safe From Unwanted Intruders</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 20px;">Your home is your sanctuary. Pest infestations not only damage wooden structures and food supplies but also expose your children and pets to disease-causing germs. Shakti Pest Control provides complete home treatments that eliminate pests without requiring you to vacate your house.</p>
            <p style="color: var(--color-text-muted); margin-bottom: 30px;">We offer single service visits as well as 1-Year Annual Maintenance Contracts (with 3-4 scheduled treatments) for continuous peace of mind.</p>

            <a href="#" class="btn btn-primary" data-open-modal data-service="Residential Home Enquiry">Book Home Inspection</a>
        </div>

        <div>
            <div style="background: var(--color-light-bg); border-radius: var(--border-radius); padding: 30px; border: 1px solid var(--color-border);">
                <h3 style="color: var(--color-secondary); margin-bottom: 15px;">Home Plans & Benefits</h3>
                <ul style="list-style: none; line-height: 2.2; font-weight: 500; color: var(--color-secondary);">
                    <li>🌿 100% Odorless & Eco-Friendly Gel Formulations</li>
                    <li>👶 Safe for Toddlers, Senior Citizens & Pets</li>
                    <li>🏡 Coverage for Apartments, Villas & Housing Societies</li>
                    <li>⏱️ Quick 45-Minute Execution Time</li>
                    <li>🛡️ Free Re-treatment Service Warranty</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
