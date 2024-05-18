<?php
include 'partials/header.php';

// GET BACK FORM DATA IF THERE WAS AN  ERROR
$fname = $_SESSION['add-user-data']['fname'] ?? null;
$lname = $_SESSION['add-user-data']['lname'] ?? null;
$username = $_SESSION['add-user-data']['username'] ?? null;
$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;

// DELETE SESSION DATA
unset($_SESSION['add-user-data']);

?>

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Add User</h2>
            <?php if(isset($_SESSION['add-user'])) : ?>
                <div class="alert__message error">
                <p>
                    <?php
                        echo $_SESSION['add-user'];
                        unset($_SESSION['add-user']);
                    ?>
                </p>
            <?php endif ?>
            </div>
            <form action="<?php echo ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="fname" value="<?php echo htmlspecialchars($fname); ?>" placeholder="First Name">
                <input type="text" name="lname" value="<?php echo htmlspecialchars($lname); ?>" placeholder="Last Name">
                <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" placeholder="Username">
                <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Email">
                <input type="password" name="createpassword" value="<?php echo htmlspecialchars($createpassword); ?>" placeholder=" Create Password">
                <input type="password" name="confirmpassword" value="<?php echo htmlspecialchars($confirmpassword); ?>" placeholder="Confirm Password">
                <select name="userrole">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form__control">
                    <label for="avatar">User Avater</label>
                    <input type="file" name="profile_picture" id="avatar">
                </div>
                <button type="submit" name="submit" class="btn">Add User</button>
            </form>
        </div>
    </section>

<?php
include '../partials/footer.php';
?>