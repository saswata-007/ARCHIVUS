<?php
require './config/database.php';

// GET SIGNUP FORM DATA IF SIGNUP BUTTON WAS CLICKED

if(isset($_POST['submit'])){
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $profile_picture = $_FILES['profile_picture'];

    //VALIDATE INPUT VALUES
    if(!$fname){
        $_SESSION['signup'] = "Please enter your First Name";
    } elseif(!$lname){
        $_SESSION['signup'] = "Please enter your Last Name"; 
    } elseif(!$username){
        $_SESSION['signup'] = "Please enter your Username"; 
    } elseif(!$email){
        $_SESSION['signup'] = "Please enter a valid Email"; 
    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8 ){
        $_SESSION['signup'] = "Password should be 8+ characters"; 
    } elseif(!$profile_picture['name']){
        $_SESSION['signup'] = "Please add your Profile Picture"; 
    } else{
        // CHECK IF PASSWORDS DON'T MATCH
        if($createpassword != $confirmpassword){
            $_SESSION['signup'] = "Passwords do not match";
        } else{
            // HASH PASSWORD
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            echo $createpassword . '</br>';
            echo $hashed_password . '</br>';

            // CHECK IF USERNAME or EMAIL ALREADY EXISTS IN THE DATABASE
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' ";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result)>0){
                $_SESSION['signup'] = "Username or Email already exists.";
            } else{
                // Profile_Picture
                // Rename Profile_Picture
                $time = time(); // MAKE EACH IMAGE NAME UNIQUE USING CURRENT TIMESTAMP
                $profile_picture_name = $time . $profile_picture['name'];
                $profile_picture_tmp_name = $profile_picture['tmp_name'];
                $profile_picture_destination_path = 'uploads/' . $profile_picture_name;

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
                        $_SESSION['signup'] = "File size is too big. Should be less than 1 MB";
                    }
                } else{
                    $_SESSION['signup'] = "File should be png, jpg, jpeg";
                }
            }
        }
    }
    // REDIRECT BACK TO SIGNUP PAGE, IF THERE'S ANY PROBLEM 
    if (isset($_SESSION['signup'])){
        // PASS FORM DATA BACK TO SIGNUP PAGE
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signup.php');
        die();
    } else{
        // INSERT NEW USERS INTO USERS TABLE
        $insert_user_query = "INSERT INTO users SET fname='$fname', lname='$lname', username='$username', email='$email', password='$hashed_password', profile_picture='$profile_picture_name', is_moderator=0";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)){
            // REDIRECT TO LOGIN PAGE WITH SUCCESS MESSAGE
            $_SESSION['signup-sucess'] = "Registration sucessful. Please log in.";
            header('location: ' . ROOT_URL . 'signin.php');
            die();
        }
    }
} else{
    // IF BUTTON WASN'T CLICKED, BOUNCE BACK TO SIGNUP PAGE
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}

?>