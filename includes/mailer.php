<?php
require_once __DIR__ . '/../config.php';

class SmtpMailer {
    private $host;
    private $port;
    private $encryption;
    private $username;
    private $password;
    private $fromEmail;
    private $fromName;

    public function __construct() {
        $this->host = SMTP_HOST;
        $this->port = SMTP_PORT;
        $this->encryption = SMTP_ENCRYPTION;
        $this->username = SMTP_USERNAME;
        $this->password = SMTP_PASSWORD;
        $this->fromEmail = SMTP_FROM_EMAIL;
        $this->fromName = SMTP_FROM_NAME;
    }

    public function sendLeadNotification($toEmail, $leadData) {
        $subject = "New Inquiry / Lead Received: " . ($leadData['service'] ? $leadData['service'] : 'General Enquiry');

        $body = "
        <html>
        <head>
          <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e0e0e0; border-radius: 8px; }
            .header { background-color: #9E1B1E; color: #ffffff; padding: 15px; border-radius: 6px 6px 0 0; text-align: center; }
            .content { padding: 20px; background-color: #f9f9f9; }
            .field { margin-bottom: 12px; }
            .label { font-weight: bold; color: #1A2530; }
            .footer { margin-top: 20px; font-size: 12px; color: #777; text-align: center; }
          </style>
        </head>
        <body>
          <div class='container'>
            <div class='header'>
              <h2>New Pest Control Lead</h2>
            </div>
            <div class='content'>
              <div class='field'><span class='label'>Name:</span> " . htmlspecialchars($leadData['name']) . "</div>
              <div class='field'><span class='label'>Phone:</span> " . htmlspecialchars($leadData['phone']) . "</div>
              <div class='field'><span class='label'>Email:</span> " . htmlspecialchars($leadData['email'] ?: 'N/A') . "</div>
              <div class='field'><span class='label'>Service Required:</span> " . htmlspecialchars($leadData['service'] ?: 'General') . "</div>
              <div class='field'><span class='label'>Source:</span> " . htmlspecialchars($leadData['source'] ?: 'Website') . "</div>
              <div class='field'><span class='label'>Message:</span><br>" . nl2br(htmlspecialchars($leadData['message'] ?: 'No message provided')) . "</div>
            </div>
            <div class='footer'>
              <p>This automated email was sent from " . APP_NAME . " website CRM.</p>
            </div>
          </div>
        </body>
        </html>
        ";

        if (!SMTP_ENABLED) {
            // Log simulated email dispatch
            error_log("[SMTP MAILER SIMULATION] Notification email queued for {$toEmail} regarding lead {$leadData['name']}");
            return true;
        }

        return $this->sendSocketEmail($toEmail, $subject, $body);
    }

    private function sendSocketEmail($to, $subject, $htmlMessage) {
        $host = ($this->encryption === 'ssl' ? 'ssl://' : '') . $this->host;
        $socket = @fsockopen($host, $this->port, $errno, $errstr, 15);

        if (!$socket) {
            error_log("SMTP Error ($errno): $errstr");
            return false;
        }

        $getResponse = function($socket) {
            $response = "";
            while ($str = fgets($socket, 515)) {
                $response .= $str;
                if (substr($str, 3, 1) == " ") break;
            }
            return $response;
        };

        $getResponse($socket);

        fputs($socket, "EHLO " . gethostname() . "\r\n");
        $getResponse($socket);

        if ($this->encryption === 'tls') {
            fputs($socket, "STARTTLS\r\n");
            $getResponse($socket);
            stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
            fputs($socket, "EHLO " . gethostname() . "\r\n");
            $getResponse($socket);
        }

        if (!empty($this->username) && !empty($this->password)) {
            fputs($socket, "AUTH LOGIN\r\n");
            $getResponse($socket);
            fputs($socket, base64_encode($this->username) . "\r\n");
            $getResponse($socket);
            fputs($socket, base64_encode($this->password) . "\r\n");
            $getResponse($socket);
        }

        fputs($socket, "MAIL FROM: <{$this->fromEmail}>\r\n");
        $getResponse($socket);
        fputs($socket, "RCPT TO: <{$to}>\r\n");
        $getResponse($socket);
        fputs($socket, "DATA\r\n");
        $getResponse($socket);

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: {$this->fromName} <{$this->fromEmail}>\r\n";
        $headers .= "To: {$to}\r\n";
        $headers .= "Subject: {$subject}\r\n";

        fputs($socket, $headers . "\r\n" . $htmlMessage . "\r\n.\r\n");
        $getResponse($socket);

        fputs($socket, "QUIT\r\n");
        fclose($socket);

        return true;
    }
}
