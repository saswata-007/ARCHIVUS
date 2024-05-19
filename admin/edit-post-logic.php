<?php
require 'config/database.php';

// Make sure the edit post button was clicked
if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;
    $thumbnail = $_FILES['thumbnail'];

    // Validate form data
    if (!$title) {
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form data on edit post page.";
    } elseif (!$category_id) {
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form data on edit post page.";
    } elseif (!$body) {
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form data on edit post page.";
    } else {
        // Handle thumbnail if a new one is uploaded
        if ($thumbnail['name']) {
            $previous_thumbnail_path = '../uploads/' . $previous_thumbnail_name;
            if ($previous_thumbnail_path) {
                unlink($previous_thumbnail_path);
            }

            // Work on the new thumbnail
            $time = time(); // Make each image name unique using the current time
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../uploads/' . $thumbnail_name;

            // Ensure the file is an image
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extension = explode('.', $thumbnail_name);
            $extension = end($extension);
            if (in_array($extension, $allowed_files)) {
                // Ensure the image is not too large (2MB+)
                if ($thumbnail['size'] < 2000000) {
                    // Upload the thumbnail
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
                } else {
                    $_SESSION['edit-post'] = "Couldn't update post. Thumbnail size too big. Should be less than 2MB.";
                }
            } else {
                $_SESSION['edit-post'] = "Couldn't update post. Thumbnail should be png, jpg, or jpeg.";
            }
        }

        // Redirect to manage posts page if the form was invalid
        if (isset($_SESSION['edit-post'])) {
            header('location: ' . ROOT_URL . 'admin/index.php');
            die();
        } else {
            // Set is_featured of all posts to 0 if is_featured for this post is 1
            if ($is_featured == 1) {
                $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
                $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
            }

            // Set thumbnail name if a new one was uploaded, else keep the old thumbnail name
            $thumbnail_to_insert = $thumbnail['name'] ? $thumbnail_name : $previous_thumbnail_name;

            $query = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_to_insert', category_id=$category_id, is_featured=$is_featured WHERE id=$id LIMIT 1";
            $result = mysqli_query($connection, $query);

            if (!mysqli_errno($connection)) {
                $_SESSION['edit-post-success'] = "Post updated successfully";
            }
        }
    }
    header('location: ' . ROOT_URL . 'admin/index.php');
    die();
}
?>

