<?php
require 'config/database.php';

// FETCH CURRENT USER FROM DATABASE
if(isset($_SESSION['user-id'])){
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT profile_picture FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $profile_picture = mysqli_fetch_assoc($result);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivus</title>

    <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">
    <link rel="icon" type="image/ico" href="<?php echo ROOT_URL ?>images/favicon.ico">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

    <nav>
        <div class="container nav__container">
            <div class="nav__logo-name">
                <a href="<?php echo ROOT_URL ?>homepage.php"><img src="./images/logo.png" class="nav__logo-img"></a>
                <a href="<?php echo ROOT_URL ?>homepage.php" class="nav__logo">ARCHIVUS</a>
            </div>
            <ul class="nav__items">
                <li><a href="<?php echo ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?php echo ROOT_URL ?>about.php">About Us</a></li>
                <li><a href="<?php echo ROOT_URL ?>contact.php">Contact</a></li>
                <?php if(isset($_SESSION['user-id'])) : ?>
                    <li class="nav__profile">
                    <div class="profile__picture">
                        <img src="<?php echo ROOT_URL . 'uploads/' . $profile_picture['profile_picture'] ?>">
                    </div>
                    <ul>
                        <li><a href="<?php echo ROOT_URL ?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?php echo ROOT_URL ?>logout.php">Logout</a></li>
                    </ul>
                </li>
                <?php else: ?>
                <li><a href="<?php echo ROOT_URL ?>signin.php">Sign In</a></li>
                <?php endif ?>
            </ul>
        </div>
    </nav>