<?php
// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Validate form data
if (empty($name) || empty($email) || empty($message)) {
  die("Please fill all the fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("Please enter a valid email address.");
}

// Set email parameters
$to = "seijitt@icloud.com"; // The email address you want to receive the form submissions
$subject = "New message from $name through the RayCo Website";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
  echo "Email sent successfully.";
} else {
  echo "Email sending failed.";
}
?>