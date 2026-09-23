<?php
$pageTitle = "Contact Us";
$activePage = "contact";
require_once __DIR__ . '/includes/header.php';
?>

<section style="background: var(--color-secondary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="color: white; font-size: 2.5rem; margin-bottom: 10px;">Contact Shakti Pest Control</h1>
        <p style="color: rgba(255,255,255,0.8);">Get In Touch For Immediate Free Site Inspection & Quotes</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 50px;">
        <div>
            <span class="section-tag">Reach Us</span>
            <h2 class="section-title">We Are Here To Help You Live Pest-Free</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 30px;">Have questions regarding pest inspection, chemicals used, or custom AMC plans? Contact our customer support team directly.</p>

            <div style="margin-bottom: 25px;">
                <h4 style="color: var(--color-secondary); margin-bottom: 5px;">📍 Head Office Address</h4>
                <p style="color: var(--color-text-muted);"><?= APP_ADDRESS ?></p>
            </div>

            <div style="margin-bottom: 25px;">
                <h4 style="color: var(--color-secondary); margin-bottom: 5px;">📞 Phone Numbers</h4>
                <p style="color: var(--color-text-muted);"><a href="tel:<?= str_replace(' ', '', APP_PHONE) ?>"><?= APP_PHONE ?></a> | +91 86559 19685</p>
            </div>

            <div style="margin-bottom: 25px;">
                <h4 style="color: var(--color-secondary); margin-bottom: 5px;">✉️ Email Addresses</h4>
                <p style="color: var(--color-text-muted);"><a href="mailto:<?= APP_EMAIL ?>"><?= APP_EMAIL ?></a></p>
            </div>

            <div>
                <h4 style="color: var(--color-secondary); margin-bottom: 5px;">📍 Major Operating Cities</h4>
                <p style="color: var(--color-text-muted);">Mumbai, Navi Mumbai, Thane, Pune, Bangalore, Hyderabad, Indore, Bhopal & Chennai</p>
            </div>
        </div>

        <div>
            <div style="background: white; padding: 35px; border-radius: var(--border-radius); box-shadow: var(--box-shadow); border: 1px solid var(--color-border); border-top: 5px solid var(--color-primary);">
                <h3 style="color: var(--color-secondary); margin-bottom: 10px;">Send Us An Inquiry</h3>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 20px;">Fill out the details below and we will contact you within 15 minutes.</p>

                <form class="ajax-form" action="process-form.php" method="POST">
                    <div class="form-message"></div>
                    <input type="hidden" name="source" value="Contact Us Page Form">

                    <div class="form-group">
                        <label>Your Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="10-digit mobile number" required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address">
                    </div>

                    <div class="form-group">
                        <label>Service Required</label>
                        <select name="service" class="form-control">
                            <option value="General Inspection">Select Service Required</option>
                            <option value="Cockroach Control">Cockroach Control</option>
                            <option value="Termite Control">Termite Treatment</option>
                            <option value="Bed Bug Treatment">Bed Bug Treatment</option>
                            <option value="Rodent Control">Rodent & Rat Control</option>
                            <option value="Mosquito Control">Mosquito Control</option>
                            <option value="Wood Borer Treatment">Wood Borer Treatment</option>
                            <option value="Commercial AMC">Commercial AMC</option>
                            <option value="Industrial Audit">Industrial Audit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea name="message" class="form-control" rows="3" placeholder="Enter your query or address..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
