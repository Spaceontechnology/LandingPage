<?php
/**
 * Pharmovix - Secure PHP AJAX Enquiry Handler (PHPMailer Integration)
 * 
 * Target Admin Email: info@pharmovix.com
 * Sender / Confirmation Email: enquiry@pharmovix.com
 */

// Allow AJAX requests from your domain
header('Content-Type: application/json; charset=utf-8');

// 1. Load PHPMailer Core files
// If using Composer, uncomment the line below:
// require 'vendor/autoload.php';
//
// If downloading PHPMailer manually, place the src/ folder in this directory and use:
/*
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method. Handshake rejected.'
    ]);
    exit;
}

// 2. Fetch and Decode JSON Payload
$inputData = json_decode(file_get_contents('php://input'), true);

if (!$inputData) {
    // Fallback to standard URL-encoded form data if JSON isn't used
    $inputData = $_POST;
}

// Extract and sanitize input variables
$name = isset($inputData['name']) ? strip_tags(trim($inputData['name'])) : '';
$email = isset($inputData['email']) ? filter_var(trim($inputData['email']), FILTER_SANITIZE_EMAIL) : '';
$phone = isset($inputData['phone']) ? strip_tags(trim($inputData['phone'])) : '';
$company = isset($inputData['company']) ? strip_tags(trim($inputData['company'])) : '';
$interest = isset($inputData['interest']) ? strip_tags(trim($inputData['interest'])) : 'Priority Waiting List Signup';
$message = isset($inputData['message']) ? htmlspecialchars(trim($inputData['message'])) : '';

if (empty($message)) {
    $message = 'Priority Waiting List Signup - Please notify me when available!';
}

// 3. Validation Rules
if (empty($name) || empty($email) || empty($phone) || empty($company)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all details: Name, Email, Contact Number, and Pharma Store Name.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please provide a valid corporate or personal email address.'
    ]);
    exit;
}

// Define operational email addresses
$adminEmail = 'info@pharmovix.com';
$senderEmail = 'enquiry@pharmovix.com';

// 4. Construct E-Mail Templates
$adminHtml = "
<div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;'>
    <div style='background-color: #0f172a; padding: 24px; text-align: center;'>
        <h1 style='color: #38bdf8; margin: 0; font-size: 24px;'>PHARMOVIX</h1>
        <p style='color: #94a3b8; margin: 5px 0 0 0; font-size: 14px;'>Incoming Priority Waiting List Signup</p>
    </div>
    <div style='padding: 24px; background-color: #ffffff;'>
        <p>Hello Admin Team,</p>
        <p>A new subscriber has joined the <strong>Pharmovix Waiting List</strong>.</p>
        <table style='width: 100%; border-collapse: collapse; margin: 20px 0;'>
            <tr style='border-bottom: 1px solid #f3f4f6;'>
                <td style='padding: 10px 0; font-weight: bold; width: 30%;'>Subscriber Name:</td>
                <td>$name</td>
            </tr>
            <tr style='border-bottom: 1px solid #f3f4f6;'>
                <td style='padding: 10px 0; font-weight: bold;'>Email Address:</td>
                <td><a href='mailto:$email'>$email</a></td>
            </tr>
            <tr style='border-bottom: 1px solid #f3f4f6;'>
                <td style='padding: 10px 0; font-weight: bold;'>Phone Number:</td>
                <td>$phone</td>
            </tr>
            <tr style='border-bottom: 1px solid #f3f4f6;'>
                <td style='padding: 10px 0; font-weight: bold;'>Pharma Store:</td>
                <td>$company</td>
            </tr>
            <tr style='border-bottom: 1px solid #f3f4f6;'>
                <td style='padding: 10px 0; font-weight: bold;'>Core Interest:</td>
                <td><span style='background-color: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;'>$interest</span></td>
            </tr>
        </table>
        <div style='background-color: #f9fafb; padding: 16px; border-radius: 6px; border-left: 4px solid #0284c7;'>
            <h4 style='margin: 0 0 8px 0;'>Details:</h4>
            <p style='margin: 0; font-size: 14px; white-space: pre-wrap;'>$message</p>
        </div>
    </div>
    <div style='background-color: #f3f4f6; padding: 12px 24px; text-align: center; font-size: 11px; color: #9ca3af;'>
        Pharmovix ERP Systems &bull; Sent on " . date('Y-m-d H:i:s') . "
    </div>
</div>";

$userHtml = "
<div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;'>
    <div style='background-color: #0c4a6e; padding: 24px; text-align: center;'>
        <h1 style='color: #38bdf8; margin: 0; font-size: 24px;'>PHARMOVIX</h1>
        <p style='color: #93c5fd; margin: 5px 0 0 0; font-size: 13px;'>Waiting List Confirmed</p>
    </div>
    <div style='padding: 24px; background-color: #ffffff;'>
        <p style='font-size: 16px;'>Dear $name,</p>
        <p>Thank you for your interest in <strong>Pharmovix ERP</strong>. We have successfully registered your pharmacy/institution, <strong>\"$company\"</strong>, to our launch priority waiting list.</p>
        <p>Our intelligent suite is currently undergoing high-precision performance training and integration reviews. We will notify you immediately using your email address ($email) or phone number ($phone) the moment Pharmovix goes live for public access.</p>
        <div style='border-top: 1px solid #f3f4f6; margin: 20px 0; padding-top: 15px;'>
            <h5 style='margin: 0 0 8px 0; color: #6b7280; font-size: 12px;'>YOUR SUBMISSION SUMMARY:</h5>
            <p style='margin: 0; font-size: 13px; font-style: italic; color: #4b5563; background-color: #f9fafb; padding: 12px; border-radius: 4px;'>\"$message\"</p>
        </div>
        <p style='font-size: 13px; color: #6b7280;'>If you did not execute this request, contact us directly at <a href='mailto:$adminEmail'>$adminEmail</a>.</p>
    </div>
    <div style='background-color: #f3f4f6; padding: 16px 24px; text-align: center; font-size: 11px; color: #9ca3af;'>
        Pharmovix Inc. &bull; Enterprise Softwares for Smart Pharma &bull; <a href='mailto:$adminEmail'>$adminEmail</a>
    </div>
</div>";

// 5. Instantiate PHPMailer Configuration
$mail = new PHPMailer(true);

try {
    // --- SMTP SERVER SETTINGS ---
    // Uncomment these parameters if you are sending via authenticated SMTP credentials:
    /*
    $mail->isSMTP();
    $mail->Host       = 'localhost';              // Set your SMTP server provider
    $mail->SMTPAuth   = true;                     // Enable SMTP verification
    $mail->Username   = 'enquiry@pharmovix.com';  // SMTP username
    $mail->Password   = 'your_secure_password';   // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ENCRYPTION_SMTPS (SSL) or ENCRYPTION_STARTTLS
    $mail->Port       = 587;                      // TCP port to connect to; 587/465
    */

    // Fallback: Default to standard PHP mail() transport if SMTP variables aren't active
    // (Note: pure SMTP is highly recommended to avoid spam folders)
    $mail->isMail();

    // 6. DISPATCH EMAIL 1: Copy to Admin Team (To: info@pharmovix.com)
    $mail->setFrom($senderEmail, "$name (Pharmovix Waiting List)");
    $mail->addAddress($adminEmail);
    $mail->addReplyTo($email, $name);
    
    $mail->isHTML(true);
    $mail->Subject = "Priority Waiting List Signup: $company [$name]";
    $mail->Body    = $adminHtml;
    $mail->AltBody = "New waiting list subscriber: $name ($email). Pharmacy: $company. Contact: $phone";

    $mail->send();

    // Clear SMTP details for next dispatch
    $mail->clearAddresses();
    $mail->clearReplyTos();

    // 7. DISPATCH EMAIL 2: Acknowledgement to User (To: Enquirer, From: enquiry@pharmovix.com)
    $mail->setFrom($senderEmail, 'Pharmovix ERP Team');
    $mail->addAddress($email, $name);
    
    $mail->Subject = "Welcome to the Pharmovix Priority Waiting List";
    $mail->Body    = $userHtml;
    $mail->AltBody = "Dear $name, thank you. We have received your subscription and added $company to the Pharmovix Priority Waiting List.";

    $mail->send();

    // Return beautiful success response code
    echo json_encode([
        'success' => true,
        'message' => 'You have been successfully added to the priority waiting list! Confirmation emails have been dispatched.'
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => "Message dispatch failed. Mailer Error: {$mail->ErrorInfo}"
    ]);
}
?>
