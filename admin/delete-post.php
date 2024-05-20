<?php
require 'config/database.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // FETCH POST FROM DATABASE IN ORDER TO DELETE THUMBNAIL FOR 'UPLOADS' FOLDER
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);

    // MAKE SURE ONLY 1 RECORD/POST WAS FETCHED
    if(mysqli_num_rows($result)==1){
        $post = mysqli_fetch_assoc($result);
        $thumbnail_name = $post['thumbnail'];
        $thumbnail_path = '../uploads/' . $thumbnail_name;

        if($thumbnail_path){
            unlink($thumbnail_path);

            // DELETE POST FROM DATABASE
            $delete_post_query = "DELETE FROM posts WHERE id=$id LIMIT 1";
            $delete_post_result = mysqli_query($connection, $delete_post_query);

            if(!mysqli_errno($connection)){
                $_SESSION['delete-post-success'] = "Post Deleted Successfully";

            }
        }
    }
}
header('location: ' . ROOT_URL . 'admin/index.php');
die();

?>