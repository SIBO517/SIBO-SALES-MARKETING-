<?php
header('Content-Type: application/json');

$response = ['success' => false];

// Validate honeypot
if (!empty($_POST['website'])) {
    die(json_encode($response));
}

// Sanitize inputs
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['error'] = 'Invalid email';
    die(json_encode($response));
}

// Process form...
$response['success'] = true;
echo json_encode($response);