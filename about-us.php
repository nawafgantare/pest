<?php
$pageTitle = "About Us - Leaders in Pest Management";
$activePage = "about";
require_once __DIR__ . '/includes/header.php';
?>

<section style="background: var(--color-secondary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="color: white; font-size: 2.5rem; margin-bottom: 10px;">About Shakti Pest Control</h1>
        <p style="color: rgba(255,255,255,0.8);">Four Decades of Excellence in Safe & Eco-Friendly Pest Extermination</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 50px; align-items: center;">
        <div>
            <span class="section-tag">Established 1983</span>
            <h2 class="section-title">Protecting Homes & Businesses For Over 40 Years</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 20px;">Shakti Pest Control is a premier pest management company in India. Founded with the mission to safeguard human health and property, we combine cutting-edge technology with eco-conscious formulations.</p>
            <p style="color: var(--color-text-muted); margin-bottom: 20px;">Whether it is a small residential apartment or a massive manufacturing plant, our trained and police-verified technicians inspect, identify, and eliminate pest threats efficiently without disruption to your daily routine.</p>

            <div style="background: var(--color-light-bg); border-left: 4px solid var(--color-primary); padding: 20px; border-radius: 4px; margin-top: 25px;">
                <h4 style="color: var(--color-secondary); margin-bottom: 5px;">Our Mission</h4>
                <p style="font-size: 0.95rem; color: var(--color-text-muted); margin: 0;">To deliver non-hazardous, long-lasting pest control solutions that restore safety and peace of mind while preserving our natural environment.</p>
            </div>
        </div>

        <div>
            <img src="assets/images/about-img.jpg" alt="About Shakti Pest Control" style="border-radius: var(--border-radius); box-shadow: var(--box-shadow); width: 100%;">
        </div>
    </div>
</section>

<!-- Values Section -->
<section style="background-color: var(--color-light-bg); padding: 80px 0;">
    <div class="container">
        <div style="text-align: center;">
            <span class="section-tag">Core Values</span>
            <h2 class="section-title">Why We Are The Industry Benchmark</h2>
            <p class="section-subtitle" style="margin-left: auto; margin-right: auto;">Our commitments that set us apart from standard service providers.</p>
        </div>

        <div class="highlights-grid" style="margin-top: 40px;">
            <div class="highlight-card" style="flex-direction: column; text-align: center; padding: 30px;">
                <div style="font-size: 2.5rem; color: var(--color-primary); margin-bottom: 10px;">🧪</div>
                <h4>Government Approved Chemicals</h4>
                <p>We strictly utilize CPCB and government-authorized eco-friendly formulations that are safe for kids and pets.</p>
            </div>

            <div class="highlight-card" style="flex-direction: column; text-align: center; padding: 30px;">
                <div style="font-size: 2.5rem; color: var(--color-primary); margin-bottom: 10px;">🎓</div>
                <h4>Certified Technicians</h4>
                <p>Every field expert undergoes rigorous entomology training and background verification before site deployment.</p>
            </div>

            <div class="highlight-card" style="flex-direction: column; text-align: center; padding: 30px;">
                <div style="font-size: 2.5rem; color: var(--color-primary); margin-bottom: 10px;">💯</div>
                <h4>100% Satisfaction Warranty</h4>
                <p>We stand by our work. If pests reappear within the warranty period, we provide re-treatment at zero added cost.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
