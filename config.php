<?php
// Global Application Configuration

define('APP_NAME', 'Shakti Pest Control');
define('APP_EMAIL', 'info@shaktipestcontrol.com');
define('APP_PHONE', '+91 86594 54862');
define('APP_ADDRESS', '520, West Valley, Vashi, Navi Mumbai, Maharashtra');

// Database Configuration
define('DB_FILE', __DIR__ . '/database/leads.sqlite');

// SMTP Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587); // 587 for TLS, 465 for SSL
define('SMTP_ENCRYPTION', 'tls'); // 'tls' or 'ssl'
define('SMTP_USERNAME', 'smtp@shaktipestcontrol.com');
define('SMTP_PASSWORD', 'your-smtp-password-here');
define('SMTP_FROM_EMAIL', 'no-reply@shaktipestcontrol.com');
define('SMTP_FROM_NAME', 'Shakti Pest Control Leads');
define('SMTP_NOTIFICATION_EMAIL', 'leads@shaktipestcontrol.com');

// Enable or disable active SMTP mailing (if false, emails are simulated & logged to DB)
define('SMTP_ENABLED', false);
