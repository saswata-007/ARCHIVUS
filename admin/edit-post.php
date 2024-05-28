<?php
include 'partials/header.php';

$category_query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $category_query);

// FETCH POST DATA FROM DATABASE IF ID IS SET
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'admin/index.php');
}

?>

<section class="form__section">
    <div class="container form__section-container-editpost">
        <h2 class="editpost">Edit Post</h2>
        <form action="<?= ROOT_URL ?>admin/edit-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <input type="hidden" name="previous_thumbnail" value="<?= $post['thumbnail'] ?>">
            <input type="text" name="title" value="<?= $post['title'] ?>" placeholder="Title">
            <select name="category">
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] == $post['category_id'] ? 'selected' : '' ?>><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <?php if(isset($_SESSION['user_is_moderator'])) : ?>
            <textarea rows="10" cols="71" name="body" placeholder="Body"><?= $post['body'] ?></textarea>
            <div class="form__control inline">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" <?= $post['is_featured'] ? 'checked' : '' ?>>
                <label for="is_featured">Featured</label>
            </div>
            <?php endif ?>
            <div class="form__control">
                <label for="thumbnail">Update Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button class="btn" name="submit">Update Post</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?>
