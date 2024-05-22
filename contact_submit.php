<?php
session_start();
require 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate form inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Check if the user exists based on email
    $query = "SELECT id FROM users WHERE email = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, get the user ID
        $user = $result->fetch_assoc();
        $user_id = $user['id'];

        // Insert the data into the 'support' table with the user_id
        $query = "INSERT INTO support (name, email, user_id, subject, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('ssiss', $name, $email, $user_id, $subject, $message);

        if ($stmt->execute()) {
            // Set success message and redirect to contact.php
            $_SESSION['success'] = "Your message has been successfully submitted.";
            header('Location: contact.php');
            exit();
        } else {
            $_SESSION['error'] = "Error: " . $stmt->error;
            header('Location: contact.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "User not found.";
        header('Location: contact.php');
        exit();
    }

    $stmt->close();
}

$connection->close();
?>
