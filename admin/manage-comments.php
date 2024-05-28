<?php
include 'partials/header.php';

// FETCH COMMENTS FROM THE DATABASE
$is_moderator = isset($_SESSION['user_is_moderator']) && $_SESSION['user_is_moderator'] === true;

if ($is_moderator) {
    // If the user is a moderator, fetch all comments
    $query = "SELECT comment.comment_id, comment.content, comment.timestamp, posts.title AS post_title, users.username AS author 
              FROM comment 
              JOIN posts ON comment.blog_id = posts.id
              JOIN users ON comment.user_id = users.id
              ORDER BY comment.comment_id DESC";
} else {
    // If the user is not a moderator, they should not have access to this page
    header('location: ' . ROOT_URL . 'admin/');
    die();
}

$comments = mysqli_query($connection, $query);

// Check if the query was successful
if (!$comments) {
    echo "Error: " . mysqli_error($connection);
    die();
}
?>

<section class="dashboard">
<?php if(isset($_SESSION['comment-action-success'])) : ?>
    <div class="success-message container">
        <p>
            <?php 
            echo $_SESSION['comment-action-success'];
            unset($_SESSION['comment-action-success']);
            ?>
        </p>
    </div>
<?php endif ?>
    <div class="container dashboard__container">
    <aside>
            <ul>
            <li><a href="add-post.php"><i class="uil uil-pen"></i>
            <h5>Add Post</h5></a></li>
            <li><a href="index.php" ><i class="uil uil-postcard"></i>
            <h5>Manage Post</h5></a></li>
            <?php if(isset($_SESSION['user_is_moderator'])): ?>
            <li><a href="add-user.php"><i class="uil uil-user-plus"></i>
            <h5>Add User</h5></a></li>
            <li><a href="manage-user.php"><i class="uil uil-users-alt"></i>
            <h5>Manage User</h5></a></li>
            <li><a href="add-category.php"><i class="uil uil-edit"></i>
            <h5>Add Category</h5></a></li>
            <li><a href="manage-categories.php"><i class="uil uil-list-ul"></i>
            <h5>Manage Category</h5></a></li>
            <li><a href="manage-comments.php" class="active"><i class="uil uil-comment-dots"></i>
            <h5>Manage Comments</h5></a></li>
            <li><a href="manage-support.php"><i class="uil uil-envelope"></i>
            <h5>Manage Support</h5></a></li>
            <?php endif ?>
        </ul>
    </aside>
        <main>
            <h2>Manage Comments</h2>
            <?php if (mysqli_num_rows($comments) > 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Comment</th>
                        <th>Post</th>
                        <th>Author</th>
                        <th>Date</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($comment = mysqli_fetch_assoc($comments)) : ?>
                    <tr>
                        <td><?= htmlspecialchars($comment['content']) ?></td>
                        <td><?= htmlspecialchars($comment['post_title']) ?></td>
                        <td><?= htmlspecialchars($comment['author']) ?></td>
                        <td><?= date("M d, Y - H:i", strtotime($comment['timestamp'])) ?></td>
                        <!-- <td><a href="<?= ROOT_URL ?>admin/edit-comment.php?id=<?= $comment['comment_id'] ?>" class="btn sm">Edit</a></td> -->
                        <td><a href="<?= ROOT_URL ?>admin/delete-comment.php?id=<?= $comment['comment_id'] ?>" class="btn sm danger">Delete</a></td>
                    </tr>
                <?php endwhile ?>
                </tbody>
            </table>
            <?php else : ?>
                <div class="error-message"><?= "NO COMMENTS FOUND" ?></div>
            <?php endif ?>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php';
?>
