<?php
// Get form data
$name = $_POST['name'];
$contact = $_POST['contact']; 
$role = $_POST['role'];
$message = $_POST['message'];

// Create array with form data
$formData = array(
    'name' => $name,
    'contact' => $contact,
    'role' => $role, 
    'message' => $message,
    'timestamp' => date('Y-m-d H:i:s')
);

// Read existing data
$jsonFile = 'rsvp_data.php';
$existingData = [];

if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $existingData = json_decode($jsonContent, true) ?: [];
}

// Add new submission
$existingData[] = $formData;

// Save updated JSON
file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));

// Redirect back to form
header('Location: index.php#rsvp');
exit();

?>