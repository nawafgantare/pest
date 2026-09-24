<?php
$pageTitle = "Home - Professional Pest Control Services";
$activePage = "home";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Banner -->
<section style="background: linear-gradient(135deg, rgba(26, 37, 48, 0.96) 0%, rgba(158, 27, 30, 0.85) 100%), url('assets/images/hero-bg.png') center/cover no-repeat; color: white; padding: 90px 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
        <div>
            <span style="background: var(--color-primary); color: white; padding: 4px 12px; border-radius: 4px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase;">Trusted Since 1983</span>
            <h1 style="color: white; font-size: 2.8rem; margin: 15px 0 20px;">Complete Safe & Eco-Friendly Pest Control Solutions</h1>
            <p style="font-size: 1.1rem; color: rgba(255,255,255,0.9); margin-bottom: 30px;">Protecting residential homes, corporate offices, and industrial plants across Navi Mumbai & Mumbai. Certified chemical treatments with 100% satisfaction guarantee.</p>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <a href="tel:<?= str_replace(' ', '', APP_PHONE) ?>" class="btn btn-primary">📞 Call <?= APP_PHONE ?></a>
                <a href="#" class="btn btn-secondary" data-open-modal data-service="Hero Instant Booking">Instant Booking</a>
            </div>
        </div>

        <!-- Hero Form Card -->
        <div style="background: white; color: var(--color-text-dark); padding: 30px; border-radius: var(--border-radius); box-shadow: 0 10px 30px rgba(0,0,0,0.3); border-top: 5px solid var(--color-primary);">
            <h3 style="margin-bottom: 5px; font-size: 1.4rem; color: var(--color-secondary);">Reach Us & Get A Free Quote!</h3>
            <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 20px;">Say goodbye to pests with our expert eco-friendly solutions.</p>

            <form class="ajax-form" action="process-form.php" method="POST">
                <div class="form-message"></div>
                <input type="hidden" name="source" value="Hero Quote Form">

                <div class="form-group">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control" placeholder="Your full name" required>
                </div>
                <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required>
                </div>
                <div class="form-group">
                    <label>Service Needed</label>
                    <select name="service" class="form-control">
                        <option value="General Inspection">Select Service Required</option>
                        <option value="Cockroach Control">Cockroach Control</option>
                        <option value="Termite Control">Termite Treatment</option>
                        <option value="Bed Bug Treatment">Bed Bug Treatment</option>
                        <option value="Rodent Control">Rodent & Rat Control</option>
                        <option value="Mosquito Control">Mosquito Control</option>
                        <option value="Wood Borer Treatment">Wood Borer Treatment</option>
                        <option value="Spider Control">Spider Pest Control</option>
                        <option value="Lizard Control">Lizard Pest Control</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control" rows="2" placeholder="Briefly describe requirement..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Get Free Quote Now</button>
            </form>
        </div>
    </div>
</section>

<!-- Highlights Bar -->
<section class="highlights-bar">
    <div class="container">
        <div class="highlights-grid">
            <div class="highlight-card">
                <div class="highlight-icon">💰</div>
                <div>
                    <h4>Cost-Effective Service</h4>
                    <p>Affordable transparent pricing with zero hidden charges.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon">⏰</div>
                <div>
                    <h4>On-Time, Any Time</h4>
                    <p>Prompt technician arrival and 24/7 emergency response.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon">👮</div>
                <div>
                    <h4>Police Verified Team</h4>
                    <p>Trained, background-checked certified specialists.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section style="padding: 80px 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 50px; align-items: center;">
        <div style="position: relative;">
            <img src="assets/images/about-img.jpg" alt="About Shakti Pest Control" style="border-radius: var(--border-radius); box-shadow: var(--box-shadow); width: 100%;">
            <img src="assets/images/about-circle-1.jpg" alt="Circle Badge" style="position: absolute; bottom: -20px; right: -20px; width: 140px; height: 140px; border-radius: 50%; border: 5px solid white; box-shadow: var(--box-shadow);">
        </div>
        <div>
            <span class="section-tag">About Us</span>
            <h2 class="section-title">Professional Pest Control Solutions You Can Trust</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 20px;">At Shakti Pest Control, we are dedicated to providing safe, eco-friendly, and effective pest management solutions for residential, commercial, and industrial spaces. With over 40 years of experience and a deep understanding of pest behavior, our mission is to protect your property and ensure a healthy, pest-free environment.</p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 30px;">
                <div style="display: flex; align-items: center; gap: 8px; font-weight: 600; color: var(--color-secondary);">✔️ Expertise You Can Trust</div>
                <div style="display: flex; align-items: center; gap: 8px; font-weight: 600; color: var(--color-secondary);">✔️ Certified Professionals</div>
                <div style="display: flex; align-items: center; gap: 8px; font-weight: 600; color: var(--color-secondary);">✔️ Eco-Friendly Approach</div>
                <div style="display: flex; align-items: center; gap: 8px; font-weight: 600; color: var(--color-secondary);">✔️ 24/7 Availability</div>
            </div>

            <a href="about-us.php" class="btn btn-primary">Learn More About Us</a>
        </div>
    </div>
</section>

<!-- Commercial, Residential & Industrial Sectors Section -->
<section style="background-color: var(--color-light-bg); padding: 80px 0;">
    <div class="container" style="text-align: center;">
        <span class="section-tag">Coverage</span>
        <h2 class="section-title">Complete Pest Control for Every Space</h2>
        <p class="section-subtitle" style="margin-left: auto; margin-right: auto;">Tailored pest elimination plans according to property requirements.</p>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-card-body" style="text-align: left;">
                    <div style="font-size: 2.5rem; margin-bottom: 10px;">🏬</div>
                    <h3 class="service-card-title">Commercial Pest Control</h3>
                    <p class="service-card-text">Professional pest management for offices, retail stores, and commercial establishments maintaining hygienic workspaces.</p>
                    <a href="commercial-pest-control.php" class="btn btn-outline" style="align-self: flex-start;">Explore Commercial</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-card-body" style="text-align: left;">
                    <div style="font-size: 2.5rem; margin-bottom: 10px;">🏠</div>
                    <h3 class="service-card-title">Residential Pest Control</h3>
                    <p class="service-card-text">Safe, non-toxic, pet-friendly pest solutions protecting homes, apartments, and residential societies from infestations.</p>
                    <a href="residential-pest-control.php" class="btn btn-outline" style="align-self: flex-start;">Explore Residential</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-card-body" style="text-align: left;">
                    <div style="font-size: 2.5rem; margin-bottom: 10px;">🏭</div>
                    <h3 class="service-card-title">Industrial Pest Control</h3>
                    <p class="service-card-text">Heavy-duty compliant pest treatment for factories, manufacturing units, and large logistics warehouses.</p>
                    <a href="industrial-pest-control.php" class="btn btn-outline" style="align-self: flex-start;">Explore Industrial</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Services Grid -->
<section style="padding: 80px 0;">
    <div class="container">
        <div style="text-align: center;">
            <span class="section-tag">Services</span>
            <h2 class="section-title">Most Popular Pest Treatments</h2>
            <p class="section-subtitle" style="margin-left: auto; margin-right: auto;">Explore our range of target-specific pest control treatments.</p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <img src="assets/images/spider-control.png" alt="Spider Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Spider Pest Control</h3>
                    <p class="service-card-text">Comprehensive spider web removal and targeted residual spraying to eliminate spider nests.</p>
                    <a href="service-detail.php?type=spider" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <img src="assets/images/lizard-control.png" alt="Lizard Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Lizard Pest Control</h3>
                    <p class="service-card-text">Odorless lizard repellent treatments and entry-point sealing to keep walls lizard-free.</p>
                    <a href="service-detail.php?type=lizard" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <img src="assets/images/fly-control.png" alt="Fly Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Fly Control</h3>
                    <p class="service-card-text">Effective fly traps, sanitation consulting, and larvicide fogging to control houseflies.</p>
                    <a href="service-detail.php?type=fly" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <img src="assets/images/bee-wasp-removal.png" alt="Bee Wasp Removal" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Bee & Wasp Removal</h3>
                    <p class="service-card-text">Safe and humane beehive removal services handled by protective-gear equipped experts.</p>
                    <a href="service-detail.php?type=bee-wasp" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="service-card">
                <img src="assets/images/wood-borer-treatment.png" alt="Wood Borer Treatment" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Wood Borer Treatment</h3>
                    <p class="service-card-text">Deep timber injection and wood preservative treatments to protect furniture from powder beetles.</p>
                    <a href="service-detail.php?type=wood-borer" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="service-card">
                <img src="assets/images/cockroach-control.png" alt="Cockroach Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Cockroach Control</h3>
                    <p class="service-card-text">Advanced herbal gel baiting and odorless chemical spray to wipe out cockroach colonies.</p>
                    <a href="service-detail.php?type=cockroach" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>

            <!-- Service 7 -->
            <div class="service-card">
                <img src="assets/images/termite-control.png" alt="Termite Control" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Termite Control</h3>
                    <p class="service-card-text">Pre and post-construction drill-fill-seal subterranean termite barriers with long warranty.</p>
                    <a href="service-detail.php?type=termite" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>

            <!-- Service 8 -->
            <div class="service-card">
                <img src="assets/images/bed-bug-treatment.png" alt="Bed Bug Treatment" class="service-card-img">
                <div class="service-card-body">
                    <h3 class="service-card-title">Bed Bug Treatment</h3>
                    <p class="service-card-text">Thermal heat spray treatment and egg eradication guaranteeing peaceful sleep.</p>
                    <a href="service-detail.php?type=bed-bug" class="btn btn-outline" style="align-self: flex-start;">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section style="background-color: var(--color-light-bg); padding: 80px 0;">
    <div class="container" style="text-align: center;">
        <span class="section-tag">Testimonials</span>
        <h2 class="section-title">What Our Satisfied Clients Say</h2>
        <p class="section-subtitle" style="margin-left: auto; margin-right: auto;">Real reviews from homeowners, office managers, and factory owners.</p>

        <div style="max-width: 750px; margin: 30px auto 0; background: white; padding: 40px; border-radius: var(--border-radius); box-shadow: var(--box-shadow); position: relative;">
            <div class="testimonial-slide">
                <p style="font-size: 1.1rem; font-style: italic; color: #444; margin-bottom: 20px;">"Very impressed with the industrial pest control service. The technicians were experienced, used certified chemicals, and ensured minimal downtime for our operations. Great job!"</p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                    <img src="assets/images/client-1.jpg" alt="Anita Desai" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                    <div style="text-align: left;">
                        <h4 style="font-size: 1rem; color: var(--color-secondary);">Anita Desai</h4>
                        <span style="font-size: 0.85rem; color: var(--color-text-muted);">Factory Owner, MIDC</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-slide" style="display: none;">
                <p style="font-size: 1.1rem; font-style: italic; color: #444; margin-bottom: 20px;">"We were struggling with a severe bed bug issue for months. The Shakti Pest Control team arrived on time, treated our entire home, and solved the problem completely!"</p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                    <img src="assets/images/client-2.png" alt="Priya Sharma" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                    <div style="text-align: left;">
                        <h4 style="font-size: 1rem; color: var(--color-secondary);">Priya Sharma</h4>
                        <span style="font-size: 0.85rem; color: var(--color-text-muted);">Homeowner, Mumbai</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-slide" style="display: none;">
                <p style="font-size: 1.1rem; font-style: italic; color: #444; margin-bottom: 20px;">"Our commercial office had a persistent rodent issue that other companies failed to address. Shakti Pest Control designed a custom solution and cleared it in one visit!"</p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                    <img src="assets/images/client-3.png" alt="Rahul Mehta" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                    <div style="text-align: left;">
                        <h4 style="font-size: 1rem; color: var(--color-secondary);">Rahul Mehta</h4>
                        <span style="font-size: 0.85rem; color: var(--color-text-muted);">Office Manager, Vashi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Accordion Section -->
<section style="padding: 80px 0;">
    <div class="container">
        <div style="text-align: center;">
            <span class="section-tag">FAQ</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle" style="margin-left: auto; margin-right: auto;">Find helpful answers to common pest control questions.</p>
        </div>

        <div class="faq-accordion">
            <div class="faq-item active">
                <div class="faq-header">
                    <span>What types of pest control services do you offer?</span>
                    <span class="faq-toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    We provide a full spectrum of pest control solutions including cockroach gel baiting, subterranean termite treatment, rodent baiting and trapping, bed bug thermal spraying, mosquito larviciding, spider control, and lizard repelling.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <span>Are your pest control chemicals safe for children and pets?</span>
                    <span class="faq-toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    Yes, absolutely. We strictly use government-approved, eco-friendly, odorless, and non-hazardous chemicals. Safety is our top priority for every home and workplace.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <span>How long does a typical pest control treatment take?</span>
                    <span class="faq-toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    General residential treatment typically takes between 1 to 2 hours. For larger industrial facilities or extensive termite piping installations, execution time may vary based on site area.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <span>Do you offer warranty or follow-up inspections?</span>
                    <span class="faq-toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    Yes! All our specialized treatments (such as Termite & Wood Borer Control) come with written service warranties ranging from 1 year to 5 years along with scheduled periodic inspection visits.
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
