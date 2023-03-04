<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'f18bscs3008@gmail.com';

// Set the email subject
$subject = 'New message from your website';

// Set the email headers
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

// Send the email
mail($to, $subject, $message, $headers);

// Redirect to thank you page
header('Location: thank_you.html');
exit;
?>