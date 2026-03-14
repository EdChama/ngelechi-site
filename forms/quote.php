<?php

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Method Not Allowed";
    exit;
}

// Helper function to clean input
function clean($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Collect form data
$name = clean($_POST['name'] ?? '');
$email = clean($_POST['email'] ?? '');
$phone = clean($_POST['phone'] ?? '');
$service = clean($_POST['service'] ?? '');
$timeline = clean($_POST['timeline'] ?? '');
$budget = clean($_POST['budget'] ?? '');
$message = clean($_POST['message'] ?? '');

// Validate required fields
if (!$name || !$email || !$phone || !$service || !$message) {
    http_response_code(400);
    echo "Please fill in all required fields.";
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Invalid email address.";
    exit;
}

// Email settings
$to = "sales@gmail.com"; // change later to sales@ngelechi.com
$subject = "New Quote Request - Ngelechi Website";

// Email body
$email_content = "New Quote Request Submitted\n\n";

$email_content .= "Client Information\n";
$email_content .= "--------------------------\n";
$email_content .= "Name: $name\n";
$email_content .= "Email: $email\n";
$email_content .= "Phone: $phone\n\n";

$email_content .= "Project Details\n";
$email_content .= "--------------------------\n";
$email_content .= "Service Requested: $service\n";
$email_content .= "Timeline: $timeline\n";
$email_content .= "Estimated Budget: $budget\n\n";

$email_content .= "Project Description\n";
$email_content .= "--------------------------\n";
$email_content .= "$message\n";

// Email headers
$headers = "From: Ngelechi Website <website@ngelechi.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $email_content, $headers)) {

    // Required response for php-email-form
    echo "OK";
    exit;

} else {

    http_response_code(500);
    echo "Message could not be sent. Please try again later.";
    exit;

}