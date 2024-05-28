<?php
require 'partials/header.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Archivus</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">
</head>
<body>

<!-- Contact Form -->
<section class="contact-form">
    <div class="contact__message">
        <?php
    // Check for success message
if (isset($_SESSION['success'])) {
    echo '<div class="success-message">' . $_SESSION['success'] . '</div>';
    unset($_SESSION['success']); // Remove success message after displaying
}

// Check for error message
if (isset($_SESSION['error'])) {
    echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']); // Remove error message after displaying
}
        ?>
        <h2 class="contact">Contact Us</h2>
        <form action="<?= ROOT_URL ?>contact_submit.php" method="post" class="contact_container">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="5" cols="71" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</section>

</body>
</html>
<?php
require 'partials/footer.php';
?>
