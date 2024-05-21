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
    <div class="container   singlepost__container">
        <h2><?= $post['title'] ?></h2>
        <div class="post__auther">
            <?php
            // FETCH AUTHOR FROM USERS TABLE USING AUTHOR_ID
            $author_id = $post['author_id'];
            $author_query = "SELECT * FROM users WHERE id=$author_id";
            $author_result = mysqli_query($connection, $author_query);
            $author = mysqli_fetch_assoc($author_result);
            ?>
            <div class="post__auther-avatar">
                <img src="./uploads/<?= $author['profile_picture'] ?>">
            </div>
            <div class="post__auther-info">
                <h5>By: <?= "{$author['fname']} {$author['lname']}" ?></h5>
                <small>
                    <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                </small>
            </div>
        </div>
        <div class="singlepost__thumbnail">
            <img src="./uploads/<?= $post['thumbnail'] ?>">
        </div>
        <p><?= $post['body'] ?></p>
    </div>
</section>
<!--==============================================end of singelpost======================================-->

<section class="comment">
    <div class="container comments__container">
        <h2>Comments</h2>
        <div class="comments">
            <div class="comment__auther-avatar">
                <img src="./images/avatar1.jpg">
            </div>
            <div class="comment__auther-info">
                <h5>By: Saswata Kayal</h5>
                <small>April 03,2024 - 18:44</small>
            </div>
            <div class="comment__info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam impedit praesentium quaerat dicta unde velit, porro nisi eaque voluptate itaque quam nostrum enim est, et minima vitae exercitationem sequi at.</p>
            </div>
            <h5>Reply</h5>
        </div>

        <div class="comments">
            <div class="comment__auther-avatar">
                <img src="./images/avatar3.jpg">
            </div>
            <div class="comment__auther-info">
                <h5>By: Achirangshu Srimani</h5>
                <small>June 09,2023 - 15:01</small>
            </div>
            <div class="comment__info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam impedit praesentium quaerat dicta unde velit, porro nisi eaque voluptate itaque quam nostrum enim est, et minima vitae exercitationem sequi at.</p>
            </div>
            <h5>Reply</h5>
        </div>

        <form class="comment__box">
            <div>
                <textarea name="comment__area" rows="4" cols="40"></textarea>
            </div>
            <div><button name="comment__submit">comment</button></div>
            <div class="comment__auther-avatar">
                <img src="./images/avatar2.jpg">
            </div>
            <div class="comment__auther-info">
                <h5>By: Rahit Kumar Makal </h5>
            </div>
        </form>

    </div>
</section>

<?php
include 'partials/footer.php';
?>