<?php
require 'config/database.php';

// GET FORM DATA IF SUBMIT BUTTON WAS CLICKED

if(isset($_POST['submit'])){
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_moderator = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $profile_picture = $_FILES['profile_picture'];

    //VALIDATE INPUT VALUES
    if(!$fname){
        $_SESSION['add-user'] = "Please enter your First Name";
    } elseif(!$lname){
        $_SESSION['add-user'] = "Please enter your Last Name"; 
    } elseif(!$username){
        $_SESSION['add-user'] = "Please enter your Username"; 
    } elseif(!$email){
        $_SESSION['add-user'] = "Please enter a valid Email"; 
    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8 ){
        $_SESSION['add-user'] = "Password should be 8+ characters"; 
    } elseif(!$profile_picture['name']){
        $_SESSION['add-user'] = "Please add your Profile Picture"; 
    } else{
        // CHECK IF PASSWORDS DON'T MATCH
        if($createpassword != $confirmpassword){
            $_SESSION['add-user'] = "Passwords do not match";
        } else{
            // HASH PASSWORD
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // CHECK IF USERNAME or EMAIL ALREADY EXISTS IN THE DATABASE
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' ";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result)>0){
                $_SESSION['add-user'] = "Username or Email already exists.";
            } else{
                // Profile_Picture ---
                // Rename Profile_Picture
                $time = time(); // MAKE EACH IMAGE NAME UNIQUE USING CURRENT TIMESTAMP
                $profile_picture_name = $time . $profile_picture['name'];
                $profile_picture_tmp_name = $profile_picture['tmp_name'];
                $profile_picture_destination_path = '../uploads/' . $profile_picture_name;

                //MAKE SURE FILE NAME IS IMAGE
                $allowed_files = ['png','jpg','jpeg'];
                $extension = explode('.', $profile_picture_name);
                $extension = end($extension);
                if(in_array($extension, $allowed_files)){
                    // MAKE SURE IMAGE IS NOT TOO LARGE (1MB)
                    if($profile_picture['size']<1000000){
                        //UPLOAD AVATAR
                        move_uploaded_file($profile_picture_tmp_name, $profile_picture_destination_path);
                    } else{
                        $_SESSION['add-user'] = "File size is too big. Should be less than 1 MB";
                    }
                } else{
                    $_SESSION['add-user'] = "File should be png, jpg, jpeg";
                }
            }
        }
    }
    // REDIRECT BACK TO add-user PAGE, IF THERE'S ANY PROBLEM 
    if (isset($_SESSION['add-user'])){
        // PASS FORM DATA BACK TO SIGNUP PAGE
        $_SESSION['add-user-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-user.php');
        die();
    } else{
        // INSERT NEW USERS INTO USERS TABLE
        $insert_user_query = "INSERT INTO users SET fname='$fname', lname='$lname', username='$username', email='$email', password='$hashed_password', profile_picture='$profile_picture_name', is_moderator='$is_moderator'";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)){
            // REDIRECT TO LOGIN PAGE WITH SUCCESS MESSAGE
            $_SESSION['add-user-success'] = "New user $fname $lname added successfully";
            header('location: ' . ROOT_URL . 'admin/manage-user.php');
            die();
        }
    }
}  else{
        // IF BUTTON WASN'T CLICKED, BOUNCE BACK TO ADD-USER PAGE
        header('location: ' . ROOT_URL . 'admin/add-user.php');
        die();
}

?>