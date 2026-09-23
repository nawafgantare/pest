<?php
header('Content-Type: application/json');
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/mailer.php';

$response = [
    'success' => false,
    'message' => 'Invalid request method'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $phone   = trim($_POST['number'] ?? $_POST['phone'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? 'General Enquiry');
    $message = trim($_POST['message'] ?? '');
    $source  = trim($_POST['source'] ?? 'Website Enquiry');

    if (empty($name)) {
        $response['message'] = 'Please enter your name.';
        echo json_encode($response);
        exit;
    }

    if (empty($phone) || !preg_match('/^[0-9\+\-\s\(\)]{8,20}$/', $phone)) {
        $response['message'] = 'Please enter a valid phone number.';
        echo json_encode($response);
        exit;
    }

    // Always save lead to SQLite Database first so data is NEVER lost
    $leadId = saveLead($name, $phone, $email, $service, $message, $source);

    if ($leadId) {
        // Attempt SMTP Notification
        $mailer = new SmtpMailer();
        $leadData = [
            'id' => $leadId,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'service' => $service,
            'message' => $message,
            'source' => $source
        ];

        try {
            $mailer->sendLeadNotification(SMTP_NOTIFICATION_EMAIL, $leadData);
        } catch (Exception $e) {
            error_log("Mailer error: " . $e->getMessage());
        }

        $response['success'] = true;
        $response['message'] = 'Thank you! Your inquiry has been submitted successfully. Our team will call you shortly.';
    } else {
        $response['message'] = 'Could not record lead into system. Please try again or call us directly.';
    }
}

echo json_encode($response);
