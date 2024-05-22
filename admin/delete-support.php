<?php
session_start();
require 'config/database.php';

// Ensure the user is a moderator
if (!isset($_SESSION['user_is_moderator']) || $_SESSION['user_is_moderator'] !== true) {
    $_SESSION['error'] = "You do not have permission to access this page.";
    header('Location: index.php');
    exit();
}

if (isset($_GET['id'])) {
    $support_id = intval($_GET['id']);

    $query = "DELETE FROM support WHERE support_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('i', $support_id);

    if ($stmt->execute()) {
        $_SESSION['message-success'] = "Support message deleted successfully.";
    } else {
        $_SESSION['error'] = "Failed to delete support message: " . $stmt->error;
    }

    $stmt->close();
} else {
    $_SESSION['error'] = "Invalid support message ID.";
}

header('Location: manage-support.php');
exit();

?>
