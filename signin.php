<?php
// require 'config/constants.php';
// require 'config/database.php';

include 'partials/header.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

// Fetch the latest post
$query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 1";
$posts = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <div class="SIGNIN">
        <div class="container">
            <form action="<?php echo ROOT_URL ?>signin-logic.php" method="POST">
                <div class="form-content">
                    <div class="login-form">
                        <h3 class="title">Sign In</h3>
                        
                        <div class="input-boxes">
                        <?php if (isset($_SESSION['signup-success'])) : ?>
                            <div class="success_message">
                                <p>
                                    <?php
                                    echo $_SESSION['signup-success'];
                                    unset($_SESSION['signup-success']);
                                    ?>
                                </p>
                            </div>
                        <?php elseif (isset($_SESSION['signin'])) : ?>
                            <div class="error_message">
                                <p>
                                    <?php
                                    echo $_SESSION['signin'];
                                    unset($_SESSION['signin']);
                                    ?>
                                </p>
                            </div>
                        <?php endif ?>
                            <div class="input-box">
                                <i class="ri-file-user-line"></i>
                                <input type="text" name="username_email" value="<?php echo htmlspecialchars($username_email); ?>" placeholder="Enter email or username">
                            </div>
                            <div class="input-box">
                                <i class="ri-lock-line"></i>
                                <input id="confirmpassword" class="confirm__password" type="password" name="password" value="<?php echo htmlspecialchars($password); ?>" placeholder="Enter password">
                                <img id="eyeicon" class="eye__Signin" src="./images/eye-close.png" alt="">
                            </div>
                            <small class="text"><a href="#">Forgot password? </a></small>
                            <div class="btn input-box">
                                <input type="submit" name="submit" value="Login">
                            </div>
                            <small class="text">Don't have an account?<a href="signup.php"> Sign Up</a></small><br>
                            <small class="text">Sign in with</small>
                            <div class="Pinterest">
                                <i class="ri-pinterest-line"></i>
                                <a href=""> Pinterest</a>
                            </div>
                            <div class="Facebook">
                                <i class="ri-facebook-fill"></i>
                                <a href=""> Facebook</a>
                            </div>
                            <div class="Google">
                                <i class="ri-google-fill"></i>
                                <a href=""> Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="post">
                <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                    
                        <div class="post__author">
                            <?php
                            // Fetch author from users table using author_id
                            $author_id = $post['author_id'];
                            $author_query = "SELECT * FROM users WHERE id=$author_id";
                            $author_result = mysqli_query($connection, $author_query);
                            $author = mysqli_fetch_assoc($author_result);
                            ?>
                            <div class="post__author-avatar">
                                <img class="pp" src="./uploads/<?= $author['profile_picture'] ?>">
                            </div>
                            <div class="post__author-info">
                                <h5 class="text-black">By: <?= "{$author['fname']} {$author['lname']}" ?></h5>
                                <small>
                                    <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                                </small>
                            </div>
                        </div>
                        <div class="post-thumbnail-image">
                            <img src="./uploads/<?= $post['thumbnail'] ?>">
                        </div>
                        <div class="post-body">
                            <h3 class="post-title"><a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                            <p class="post-body"><?= substr($post['body'], 0, 50) ?>...</p>
                        </div>
                   
                <?php endwhile ?>
            </div>
        </div>
    </div>
</body>
<script>
    let eyeicon = document.getElementById("eyeicon");
    let confirmpassword = document.getElementById("confirmpassword");

    eyeicon.onclick = function(){
        if(confirmpassword.type == "password"){
            confirmpassword.type = "text";
            eyeicon.src = "./images/eye-open.png";
        } else{
            confirmpassword.type = "password";
            eyeicon.src = "./images/eye-close.png";

        }
    }
</script>
</html>
<?php
include 'partials/footer.php';
?>
