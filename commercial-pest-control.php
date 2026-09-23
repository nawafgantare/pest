<?php
$pageTitle = "Commercial Pest Control Services";
$activePage = "sectors";
require_once __DIR__ . '/includes/header.php';
?>

<section style="background: var(--color-secondary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="color: white; font-size: 2.5rem; margin-bottom: 10px;">Commercial Pest Control Solutions</h1>
        <p style="color: rgba(255,255,255,0.8);">Discreet, Audit-Compliant Pest Management for Offices, Retail & Hospitality</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 50px; align-items: center;">
        <div>
            <span class="section-tag">Business Protection</span>
            <h2 class="section-title">Maintain High Hygiene Standards & Safeguard Your Reputation</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 20px;">A single pest sighting in a commercial facility can destroy customer trust and trigger health regulatory audits. Shakti Pest Control provides tailor-made Annual Maintenance Contracts (AMC) designed specifically for corporate offices, IT parks, retail malls, restaurants, and hotels.</p>
            <p style="color: var(--color-text-muted); margin-bottom: 30px;">We work after business hours or during night shifts to ensure zero disruption to your daily client operations.</p>

            <a href="#" class="btn btn-primary" data-open-modal data-service="Commercial AMC Enquiry">Request Commercial AMC Quote</a>
        </div>

        <div>
            <div style="background: var(--color-light-bg); border-radius: var(--border-radius); padding: 30px; border: 1px solid var(--color-border);">
                <h3 style="color: var(--color-secondary); margin-bottom: 15px;">Sectors We Serve</h3>
                <ul style="list-style: none; line-height: 2.2; font-weight: 500; color: var(--color-secondary);">
                    <li>🏢 Corporate Offices & IT Parks</li>
                    <li>🏬 Retail Outlets & Malls</li>
                    <li>🏨 Hotels, Resorts & Guest Houses</li>
                    <li>🍽️ Restaurants, Cafes & Commercial Kitchens</li>
                    <li>🏫 Educational Institutions & Colleges</li>
                    <li>🏥 Hospitals & Healthcare Facilities</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
