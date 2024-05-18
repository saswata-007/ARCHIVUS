<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    // GET UPDATED FORM DATA
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_moderator = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);

    // CHECK FOR VALID INPUT
    if(!$fname || !$lname){
        $_SESSION['edit-user'] = "Invalid Form Input on Edit Page";
    } else{
        // UPDATE USER
        $query = "UPDATE users SET fname='$fname', lname='$lname', is_moderator=$is_moderator WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if(mysqli_errno($connection)){
            $_SESSION['edit-user'] = "Failed to Update User";
        } else{
            $_SESSION['edit-user-success'] = "User $fname $lname updated successfully";
        }
    }
}

header('location: ' . ROOT_URL . 'admin/manage-user.php');
die();
?>