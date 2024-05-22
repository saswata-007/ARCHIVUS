<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    $comment_id = $_GET['id'];

    // Sanitize the input
    $comment_id = mysqli_real_escape_string($connection, $comment_id);

    // Prepare the query
    $query = "DELETE FROM comment WHERE comment_id = $comment_id";
    
    // Execute the query and check for errors
    if (mysqli_query($connection, $query)) {
        $_SESSION['comment-action-success'] = "Comment deleted successfully!";
    } else {
        $_SESSION['comment-action-failure'] = "Error deleting comment: " . mysqli_error($connection);
    }

    header('location: ' . ROOT_URL . 'admin/manage-comments.php');
    die();
} else {
    header('location: ' . ROOT_URL . 'admin/manage-comments.php');
    die();
}
?>
