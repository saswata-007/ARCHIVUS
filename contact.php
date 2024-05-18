<?php
include 'partials/header.php'
?>

    <div class="contact_container">
        <h1>Contact Us</h1>
        <form action="" method="post">
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your Email">
            <input type="text" placeholder="Subject">
            <textarea id="message" name="message" rows="5" required placeholder="Message"></textarea>
            
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
    <?php
include 'partials/footer.php'
?>