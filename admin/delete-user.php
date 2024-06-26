<?php
require 'config/database.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // FETCH USER FROM DATABASE
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    // MAKE SURE WE GOT BACK ONLY ONE USER
    if(mysqli_num_rows($result) == 1){
        $profile_picture_name = $user['profile_picture'];
        $profile_picture_path = '../uploads/' . $profile_picture_name;
        //DELETE IF IMAGE IS AVAILABLE
        if($profile_picture_path){
            unlink($profile_picture_path);
        }
    }

    // FETCH ALL THUMBNAILS OF USER"S POSTS AND DELETE THEM
    $thumbnails_query = "SELECT thumbnail FROM posts WHERE author_id=$id";
    $thumbnails_result = mysqli_query($connection, $thumbnails_query);
    if(mysqli_num_rows($thumbnails_result)>0){
        while($thumbnail = mysqli_fetch_assoc($thumbnails_result)){
            $thumbnail_path = '../uploads/' . $thumbnail['thumbnail'];

            // DELETE THUMBNAIL FROM UPLOADS FOLDER IF EXISTS
            if($thumbnail_path){
                unlink($thumbnail_path);
            }
        }
    }




    // DELETE USER FROM DATABASE
    $delete_user_query = "DELETE FROM users WHERE id=$id";
    $delete_user_result = mysqli_query($connection, $delete_user_query);
    if(mysqli_errno($connection)){
        $_SESSION['delete-user'] = "Couldn't delete '{$user['fname']} '{$user['lname']}'";
    } else{
        $_SESSION['delete-user-success'] = "{$user['fname']} {$user['lname']} has been deleted successfully";
    }
}

header('location: ' . ROOT_URL . 'admin/manage-user.php');

?>