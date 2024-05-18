<?php
require 'config/constants.php';

// GET BACK FORM DATA IF THERE WAS AN REGISTRATION ERROR
$fname = $_SESSION['signup-data']['fname'] ?? null;
$lname = $_SESSION['signup-data']['lname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

// DELETE SIGNUP SESSION
unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="<?php ROOT_URL ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <div class="SIGNUP">
    <div class="container">
        <form action="<?php ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <div class="form-content">
                <div class="signup-form">
                    <h3 class="title">Sign Up</h3>
                    <?php 
                        if(isset($_SESSION['signup'])) : ?>
                            <div class="error-message">
                                <p><?php 
                                echo $_SESSION['signup'];
                                unset($_SESSION['signup']); 
                                ?>
                                </p>
                            </div>
                    <?php endif ?>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="ri-user-3-line"></i>
                            <input type="text" name="fname" value="<?php echo htmlspecialchars($fname); ?>" placeholder="enter first name">
                        </div>
                        <div class="input-box">
                            <i class="ri-user-3-line"></i>
                            <input type="text" name="lname" value="<?php echo htmlspecialchars($lname); ?>" placeholder="enter last name">
                        </div>
                        <div class="input-box">
                            <i class="ri-file-user-line"></i>
                            <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" placeholder="enter username">
                        </div>
                        <div class="input-box">
                            <i class="ri-mail-line"></i>
                            <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="enter email">
                        </div>
                        <div class="input-box">
                            <i class="ri-lock-line"></i>
                            <input type="password" name="createpassword" value="<?php echo htmlspecialchars($createpassword); ?>" placeholder="enter password">
                        </div>
                        <div class="input-box">
                            <i class="ri-lock-line"></i>
                            <input type="password" name="confirmpassword" value="<?php echo htmlspecialchars($confirmpassword); ?>" placeholder="confirm password">
                        </div>
                        <div class="form-control">
                            <label for="avatar">profile picture</label>
                            <input type="file" name="profile_picture" id="avatar">
                        </div>
                        <div class="btn input-box">
                            <input type="submit" name="submit" value="Create Account">
                        </div>
                        <small class="text">Already have an account?<a href="signin.php"> Sign In</a></small>
                    </div>
                </div>
            </div>
        </form>
        <div class="post">
            <div class="post-author-info">
                <span>By:</span><h5>devolopment team of Archivus</h5>    
            </div>
            <h4 class="post-title"><a href="posts.html">Lorem ipsum dolor sit amet.</a></h4>
            <div class="post-thumbnail">
                <img src="./images/article7.png" alt="img" width="300px">
            </div>
            <div class="post-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, dignissimos at provident hic deserunt. Eligendi, consectetur, id magni doloribus et minima rem laborum, beatae illum officiis nihil facilis similique!
            </div>
        </div>
    </div> 
    </div>
    
</body>
</html>