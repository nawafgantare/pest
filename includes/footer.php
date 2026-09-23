<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <img src="assets/images/spc-logo.png" alt="Shakti Pest Control" style="height: 50px; background: white; padding: 6px; border-radius: 6px; margin-bottom: 15px;">
                <p>Trusted Pest Management Solutions Since 1983. Providing safe, eco-friendly, and government-approved chemical treatments for homes and businesses.</p>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="services.php">All Services</a></li>
                    <li><a href="blog.php">Blog & News</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="crm.php">CRM Lead Portal</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Our Services</h4>
                <ul class="footer-links">
                    <li><a href="service-detail.php?type=termite">Termite Control</a></li>
                    <li><a href="service-detail.php?type=cockroach">Cockroach Control</a></li>
                    <li><a href="service-detail.php?type=bed-bug">Bed Bug Treatment</a></li>
                    <li><a href="service-detail.php?type=rodent">Rodent & Rat Control</a></li>
                    <li><a href="service-detail.php?type=mosquito">Mosquito Control</a></li>
                    <li><a href="service-detail.php?type=wood-borer">Wood Borer Treatment</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact Us</h4>
                <p>📍 <?= APP_ADDRESS ?></p>
                <p style="margin-top: 8px;">📞 <a href="tel:<?= str_replace(' ', '', APP_PHONE) ?>"><?= APP_PHONE ?></a></p>
                <p style="margin-top: 8px;">✉️ <a href="mailto:<?= APP_EMAIL ?>"><?= APP_EMAIL ?></a></p>
                <p style="margin-top: 8px; color: #2E7D32; font-weight: 600;">🕒 24/7 Emergency Inspection Available</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Copyright © <?= date('Y') ?> Shakti Pest Control. All Rights Reserved.</p>
            <p>Developed with Vanilla HTML, PHP & CSS</p>
        </div>
    </div>
</footer>

<!-- Global Enquiry Modal Popup -->
<div class="modal-overlay" id="enquiryModal">
    <div class="modal-card">
        <button class="modal-close" data-close-modal>&times;</button>
        <h3 style="margin-bottom: 5px; color: var(--color-primary);">Get A Free Instant Quote</h3>
        <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 20px;">Fill out the form below and our certified pest expert will get back to you within 15 minutes.</p>

        <form class="ajax-form" action="process-form.php" method="POST">
            <div class="form-message"></div>
            <input type="hidden" name="source" value="Popup Modal Enquiry">
            <input type="hidden" name="service" id="modalServiceInput" value="General Inquiry">

            <div class="form-group">
                <label>Your Name *</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label>Phone Number *</label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter 10-digit mobile number" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email address">
            </div>

            <div class="form-group">
                <label>Your Message / Address Details</label>
                <textarea name="message" class="form-control" rows="3" placeholder="Describe pest issues or location..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Inquiry Now</button>
        </form>
    </div>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>
