<?php
include 'partials/header.php';

// FETCH POST FROM DATABASE IF ID IS SET
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
}

?>
<section class="singlepost">
    <div class="container singlepost__container">
        <h2><?= htmlspecialchars($post['title']) ?></h2>
        <div class="post__author">
            <?php
            // FETCH AUTHOR FROM USERS TABLE USING AUTHOR_ID
            $author_id = $post['author_id'];
            $author_query = "SELECT * FROM users WHERE id=$author_id";
            $author_result = mysqli_query($connection, $author_query);
            $author = mysqli_fetch_assoc($author_result);
            ?>
            <div class="post__author-avatar">
                <img class="pp" src="./uploads/<?= htmlspecialchars($author['profile_picture']) ?>">
            </div>
            <div class="post__author-info">
                <h5>By: <?= htmlspecialchars("{$author['fname']} {$author['lname']}") ?></h5>
                <small>
                    <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                </small>
            </div>
        </div>
        <div class="singlepost__thumbnail">
            <img src="./uploads/<?= htmlspecialchars($post['thumbnail']) ?>">
        </div>
        <p><?= nl2br(htmlspecialchars($post['body'])) ?></p>
    </div>
</section>

<!--==============================================end of singlepost======================================-->

<section class="comment">
    <div class="container comments__container">
        <h2>Comments</h2>

        <?php
        // FETCH COMMENTS FROM DATABASE
        $comment_query = "SELECT comment.content, comment.timestamp, users.fname, users.lname, users.profile_picture FROM comment INNER JOIN users ON comment.user_id = users.id WHERE comment.blog_id = $id ORDER BY comment.timestamp DESC";
        $comment_result = mysqli_query($connection, $comment_query);
        ?>

        <?php if(mysqli_num_rows($comment_result) > 0): ?>
            <?php while($comment = mysqli_fetch_assoc($comment_result)): ?>
                <div class="comments">
                    <div class="comment__author-avatar">
                        <img class="pp" src="./uploads/<?= htmlspecialchars($comment['profile_picture']) ?>">
                    </div>
                    <div class="comment__author-info">
                        <h5>By: <?= htmlspecialchars("{$comment['fname']} {$comment['lname']}") ?></h5>
                        <small><?= date("M d, Y - H:i", strtotime($comment['timestamp'])) ?></small>
                    </div>
                    <div class="comment__info">
                        <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No comments yet. Be the first to comment!</p>
        <?php endif; ?>

        <?php if(isset($_SESSION['user-id'])): ?>
            <form class="comment__box" action="<?= ROOT_URL ?>admin/add-comment.php" method="POST">
                <div>
                    <textarea name="content" rows="4" cols="40" required></textarea>
                </div>
                <input type="hidden" name="blog_id" value="<?= $id ?>">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user-id'] ?>">
                <div><button name="comment-submit">Comment</button></div>
            </form>
        <?php else: ?>
            <p>You have to <a href="<?= ROOT_URL ?>signin.php">log in</a> to write a comment.</p>
        <?php endif; ?>
    </div>
</section>

<?php
include 'partials/footer.php';
?>
