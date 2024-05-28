<?php
// require 'config/constants.php';

include 'partials/header.php';

// GET BACK FORM DATA IF THERE WAS AN REGISTRATION ERROR
$fname = $_SESSION['signup-data']['fname'] ?? null;
$lname = $_SESSION['signup-data']['lname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

// DELETE SIGNUP SESSION
unset($_SESSION['signup-data']);

// Fetch the latest post
$query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 1";
$posts = mysqli_query($connection, $query);
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
                            <div class="error_message">
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
                        <div >
                            <input type="submit" name="submit" value="Create Account" class="signup-button">
                        </div>
                        <small class="text">Already have an account?<a href="signin.php"> Sign In</a></small>
                    </div>
                </div>
            </div>
        </form>
        <section class="post">
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
                                <h5 class="text-black" >By: <?= "{$author['fname']} {$author['lname']}" ?></h5>
                                <small>
                                    <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                                </small>
                            </div>
                        </div>
                        <div class="post-thumbnail">
                            <img class="sign-posts" src="./uploads/<?= $post['thumbnail'] ?>">
                        </div>
                        <div class="post-body">
                            <h3 class="post-title"><a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                            <p class="post-body"><?= substr($post['body'], 0, 150) ?>...</p>
                        </div>
                    
                <?php endwhile ?>
            </section>
    </div> 
    </div>
    
</body>
</html>

<?php
include 'partials/footer.php';
?>