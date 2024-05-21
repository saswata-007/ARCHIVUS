<?php
include 'partials/header.php';

// FETCH FEATURED POSTS FROM DATABASE
$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);

// FETCH ALL POSTS FROMS POSTS TABLE
$query = "SELECT * FROM posts ORDER BY date_time DESC";
$posts = mysqli_query($connection, $query);
?>

<!-- SHOW FEATURED POSTS IF THERE'S ANY -->
<?php if (mysqli_num_rows($featured_result) == 1) : ?>

    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./uploads/<?= $featured['thumbnail'] ?>">
            </div>
            <div class="post__info">
                <?php
                
                // FETCH CATEGORY FROM CATEGORIES TABLE USING CATEGORY_ID OF POST
                $category_id = $featured['category_id'];
                $category_query = "SELECT * FROM categories WHERE id=$category_id";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                
                ?>
                <a href="<?= ROOT_URL ?>category-title.php?id=<?= $category['id']?>" class="category__button"><?= $category['title'] ?></a>
                <h2 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a></h2>
                <p class="post__body">
                <?= substr($featured['body'], 0, 300) ?>...
                </p>
                <div class="post__auther-avatar">
                    <?php
                        // FETCH AUTHOR FROM USERS TABLE USING AUTHOR_ID
                        $author_id = $featured['author_id'];
                        $author_query = "SELECT * FROM users WHERE id=$author_id";
                        $author_result = mysqli_query($connection, $author_query);
                        $author = mysqli_fetch_assoc($author_result);
                    ?>
                    <img src="./uploads/<?= $author['profile_picture'] ?>">
                </div>
                <div class="post__auther-info">
                    <h5>By: <?= "{$author['fname']} {$author['lname']}" ?></h5>
                    <small>
                        <?= date("M d, Y - H:i", strtotime($featured['date_time'])) ?>
                    </small>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<!-- ========================================================posts====================================== -->
<section class="posts">
    <div class="container posts__container">
        <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./uploads/<?= $post['thumbnail'] ?>">
            </div>
            <div class="post__info">
            <?php
                
                // FETCH CATEGORY FROM CATEGORIES TABLE USING CATEGORY_ID OF POST
                $category_id = $post['category_id'];
                $category_query = "SELECT * FROM categories WHERE id=$category_id";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                
                ?>
                <a href="<?= ROOT_URL ?>category-title.php?id=<?= $category['id']?>" class="category__button"><?= $category['title'] ?></a>
                <h3 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $post['id']?>"><?= $post['title'] ?></a></h3>
                <p class="post__body"><?= substr($post['body'], 0, 150)?>...</p>
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

<?php
include 'partials/footer.php'
?>