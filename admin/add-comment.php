<?php
require '../config/database.php';

if (isset($_POST['comment-submit'])) {
    $content = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $blog_id = filter_var($_POST['blog_id'], FILTER_SANITIZE_NUMBER_INT);
    $user_id = filter_var($_POST['user_id'], FILTER_SANITIZE_NUMBER_INT);

    if ($content && $blog_id && $user_id) {
        $query = "INSERT INTO comment (content, blog_id, user_id) VALUES ('$content', '$blog_id', '$user_id')";
        $result = mysqli_query($connection, $query);

        if (!mysqli_errno($connection)) {
            $_SESSION['add-comment-success'] = "Comment posted successfully";
        } else {
            $_SESSION['add-comment-error'] = "Failed to post comment. Please try again.";
        }
    } else {
        $_SESSION['add-comment-error'] = "Invalid input. Please try again.";
    }

    header('location: ' . ROOT_URL . 'post.php?id=' . $blog_id);
    die();
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>
