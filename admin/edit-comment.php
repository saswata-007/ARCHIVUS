<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $comment_id = $_GET['id'];
    $query = "SELECT * FROM comments WHERE id = $comment_id";
    $result = mysqli_query($connection, $query);
    $comment = mysqli_fetch_assoc($result);

    if (isset($_POST['submit'])) {
        $content = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if ($content) {
            $query = "UPDATE comments SET content = '$content' WHERE id = $comment_id";
            mysqli_query($connection, $query);

            $_SESSION['comment-action-success'] = "Comment updated successfully!";
            header('location: ' . ROOT_URL . 'admin/manage-comments.php');
            die();
        } else {
            $_SESSION['edit-comment'] = "Please enter a valid comment.";
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-comments.php');
    die();
}
?>

<section class="form-section">
    <div class="container form-section__container">
        <h2>Edit Comment</h2>
        <form action="" method="POST">
            <textarea name="content" rows="4"><?= htmlspecialchars($comment['content']) ?></textarea>
            <button type="submit" name="submit" class="btn">Update Comment</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?>
