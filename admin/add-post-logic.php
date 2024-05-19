<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $author_id = $_SESSION['user-id'];
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);

    $thumbnail = $_FILES['thumbnail'];

    // SET IS_FEATURED to 0 IF UNCHECKED
    $is_featured = $is_featured == 1 ?: 0;

    // VALIDATE FORM DATA
    if (!$title) {
        $_SESSION['add-post'] = "Enter Post Title";
    } elseif (!$category_id) {
        $_SESSION['add-post'] = "Select Post Category";
    } elseif (!$body) {
        $_SESSION['add-post'] = "Write Something";
    } elseif (!$thumbnail['name']) {
        $_SESSION['add-post'] = "Choose Post Thumbnail";
    } else {
        // WORK ON THUMBNAIL
        // RENAME THE IMAGE
        $time = time(); // MAKE EACH IMAGE NAME IS UNIQUE
        $thumbnail_name = $time . $thumbnail['name'];
        $thumbnail_tmp_name = $thumbnail['tmp_name'];
        $thumbnail_destination_path = '../uploads/' . $thumbnail_name;

        // MAKE SURE FILE IS AN IMAGE
        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extension = explode('.', $thumbnail_name);
        $extension = end($extension);
        if (in_array($extension, $allowed_files)) {
            // MAKE SURE IMAGE IS NOT TOO LARGE (2MB)
            if ($thumbnail['size'] < 2000000) {
                //UPLOAD THUMBNAIL
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
            } else {
                $_SESSION['add-post'] = "File size is too big. Should be less than 2 MB";
            }
        } else {
            $_SESSION['add-post'] = "File should be png, jpg, jpeg";
        }
    }
    // REDIRECT BACK (WITH FORM DATA) TO ADD-POST PAGE IF THERE IS ANY PROBLEM
    if(isset($_SESSION['add-post'])){
        $_SESSION['add-post-data']=$_POST;
        header('location: ' . ROOT_URL . 'admin/add-post.php');
        die();
    } else{
        // SET IS_FEATURED OFF ALL POSTS 0 SIF IS_FEATURED FOR THIS POST IS 1
        if($is_featured==1){
            $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        } 
        //INSERT POST INTO DATABASE
        $query = "INSERT INTO posts (title, body, thumbnail, category_id, author_id, is_featured) VALUES ('$title', '$body', '$thumbnail_name', $category_id, $author_id, $is_featured)";
        $result = mysqli_query($connection, $query);

        if(!mysqli_errno($connection)){
            $_SESSION['add-post-success'] = "New Post Added Successfully";
            header('location: ' . ROOT_URL . 'admin/index.php');
            die();
        }
    }
}

header('location: ' . ROOT_URL . 'admin/add-post.php');
die();
?>