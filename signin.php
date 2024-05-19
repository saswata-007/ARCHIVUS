<?php
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password  '] ?? null;

unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="SIGNIN">
    <div class="container">
        <form action="<?php ROOT_URL ?>signin-logic.php" method="POST">
            <div class="form-content">
                <div class="login-form">
                    <h3 class="title">Sign In</h3>
                    <?php if(isset($_SESSION['signup-success'])) : ?>
                        <div class="success-message">
                            <p>
                                <?php 
                                echo $_SESSION['signup-success'];
                                unset($_SESSION['signup-success']);
                                ?>
                            </p>
                        </div>
                    <?php elseif(isset($_SESSION['signin'])) : ?>
                        <div class="error-message">
                            <p>
                                <?php 
                                echo $_SESSION['signin'];
                                unset($_SESSION['signin']);
                                ?>
                            </p>
                        </div>
                    <?php endif ?>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="ri-file-user-line"></i>
                            <input type="text" name="username_email" value="<?php echo htmlspecialchars($username_email); ?>" placeholder="enter email or username">
                        </div>
                        <div class="input-box">
                            <i class="ri-lock-line"></i>
                            <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>" placeholder="enter password">
                        </div>
                        <small class="text"><a href="#">Forgot password? </a></small>
                        <div class="btn input-box">
                            <input type="submit" name="submit" value="Login">
                        </div>
                        <small class="text">Don't have an account?<a href="signup.php"> Sign Up</a></small><br>
                        <small class="text">Sign in with</small>
                        <div class="Pinterest">
                            <i class="ri-pinterest-line"></i>
                            <a href="" > Pinterest</a>
                        </div>
                        <div class="Facebook">
                            <i class="ri-facebook-fill"></i>
                            <a href="" > Facebook</a>
                        </div>
                        <div class="Google">
                            <i class="ri-google-fill"></i>
                            <a href=""> Gooogle</a>
                        </div>
                    </div>
                </div>            
            </div>
        </form> 
        <div class="post">
            <div class="post-author-info">
                <span>By:</span><h5>devolopment team of Archivus</h5>    
            </div>
            <h3 class="post-title"><a href="posts.html">28th January, 1950</a></h3>
            <div class="post-thumbnail">
                <img src="./images/article10.png" alt="img" width="300px">
            </div>
            <div class="post-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, dignissimos at provident hic deserunt. Eligendi, consectetur, id magni doloribus et minima rem laborum, beatae illum officiis nihil facilis similique!
            </div>
        </div>
    </div>
    </div>
        
    
</body>
</html>