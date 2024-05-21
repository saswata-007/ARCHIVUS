<?php
include 'partials/header.php';

// FETCH POSTS IF ID IS SET
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE category_id=$id ORDER BY date_time DESC";
    $posts = mysqli_query($connection, $query);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}

?>
<header class="category__title">
    <h2>
        <?php

        // FETCH CATEGORY FROM CATEGORIES TABLE USING CATEGORY_ID OF POST
        $category_id = $id;
        $category_query = "SELECT * FROM categories WHERE id=$id";
        $category_result = mysqli_query($connection, $category_query);
        $category = mysqli_fetch_assoc($category_result);
        echo $category['title'];
        ?>
    </h2>
</header>
<!-- ================ END OF CATEGORY TITLE ================ -->

<?php if(mysqli_num_rows($posts)>0) :?>

<section class="posts">
    <div class="container posts__container">
        <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./uploads/<?= $post['thumbnail'] ?>">
                </div>
                <div class="post__info">
                    <h3 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                    <p class="post__body"><?= substr($post['body'], 0, 150) ?>...</p>
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
                </div>
            </article>
        <?php endwhile ?>
    </div>
</section>
<?php else : ?>
        <div class="error-message lg">
            <p>No Posts Found For This Category</p>
        </div>
<?php endif ?>
<!-- =====================================post end here ======================================== -->
<section class="category__buttons">
    <div class="container category__buttons-container">
        <?php
            $all_categories_query = "SELECT * FROM categories";
            $all_categories_result = mysqli_query($connection, $all_categories_query);
        ?>
        <?php while($category = mysqli_fetch_assoc($all_categories_result)) : ?>
        <a href="<?= ROOT_URL ?>category-title.php?id=<?= $category['id']?>" class="category__button"><?= $category['title'] ?></a>
        <?php endwhile ?>
    </div>
</section>
<!-- ==============================================end of category buttons======================== -->


<?php
include 'partials/footer.php';
?>