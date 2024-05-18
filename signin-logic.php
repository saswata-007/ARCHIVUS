<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    // GET FORM DATA
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);

    if(!$username_email){
        $_SESSION['signin'] = "Please enter Username or Email";
    } elseif(!$password){
        $_SESSION['signin'] = "Please enter your Password";
    } else{
        // FETCH USER FROM DATABASE
        $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result)==1){
            // CONVERT THE RECORD INTO ASSOC ARRAY
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            // COMPARE FORM PASSWORD WITH THE DATABASE PASSWORD
            if(password_verify($password, $db_password)){
                // SET SESSION FOR ACCESS CONTROL
                $_SESSION['user-id'] = $user_record['id'];
                // SET SESSION IF USER IS AN MODERATOR
                if($user_record['is_moderator'] == 1){
                    $_SESSION['user_is_moderator'] = true;
                }
                //LOGIN USER
                header('location: ' . ROOT_URL . 'admin/');
            } else{
                $_SESSION['signin']="Please check your Password!";
            }
        } else{
            $_SESSION['signin']="User Not Found!";
        }
    }
    // IF ANY PROBLEM, REDIRECT BACK TO SIGNIN PAGE WITH LOGIN DATA
    if(isset($_SESSION['signin'])){
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }
} else{
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}
?>