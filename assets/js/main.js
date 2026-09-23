document.addEventListener('DOMContentLoaded', function() {

    // Mobile Navigation Toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            mobileToggle.classList.toggle('active');
        });
    }

    // Mobile Dropdown Click Handler
    const dropdownToggles = document.querySelectorAll('.has-dropdown > a');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                const parent = this.parentElement;
                parent.classList.toggle('active');
            }
        });
    });

    // FAQ Accordions
    const faqHeaders = document.querySelectorAll('.faq-header');
    faqHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            const isActive = item.classList.contains('active');

            // Close all
            document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('active'));

            // Toggle clicked
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Modal Popup Trigger
    const modalTriggers = document.querySelectorAll('[data-open-modal]');
    const modalOverlay = document.getElementById('enquiryModal');
    const modalCloseButtons = document.querySelectorAll('[data-close-modal]');

    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const serviceName = this.getAttribute('data-service') || '';
            const modalServiceInput = document.getElementById('modalServiceInput');
            if (modalServiceInput && serviceName) {
                modalServiceInput.value = serviceName;
            }
            if (modalOverlay) {
                modalOverlay.classList.add('active');
            }
        });
    });

    modalCloseButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            if (modalOverlay) {
                modalOverlay.classList.remove('active');
            }
        });
    });

    if (modalOverlay) {
        modalOverlay.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
            }
        });
    }

    // AJAX Form Submissions
    const forms = document.querySelectorAll('form.ajax-form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formObj = this;
            const msgBox = formObj.querySelector('.form-message');
            const submitBtn = formObj.querySelector('button[type="submit"]');

            if (msgBox) {
                msgBox.className = 'form-message';
                msgBox.style.display = 'none';
            }

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.dataset.originalText = submitBtn.innerText;
                submitBtn.innerText = 'Submitting...';
            }

            const formData = new FormData(formObj);

            fetch('process-form.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerText = submitBtn.dataset.originalText;
                }

                if (msgBox) {
                    msgBox.innerText = data.message;
                    if (data.success) {
                        msgBox.className = 'form-message success';
                        formObj.reset();
                    } else {
                        msgBox.className = 'form-message error';
                    }
                } else {
                    alert(data.message);
                    if (data.success) formObj.reset();
                }
            })
            .catch(err => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerText = submitBtn.dataset.originalText;
                }
                if (msgBox) {
                    msgBox.innerText = 'An unexpected error occurred. Please try again.';
                    msgBox.className = 'form-message error';
                }
            });
        });
    });

    // Simple Testimonial Slider Loop
    const testimonials = document.querySelectorAll('.testimonial-slide');
    if (testimonials.length > 1) {
        let currentIndex = 0;
        setInterval(() => {
            testimonials[currentIndex].style.display = 'none';
            currentIndex = (currentIndex + 1) % testimonials.length;
            testimonials[currentIndex].style.display = 'block';
        }, 5000);
    }
});
