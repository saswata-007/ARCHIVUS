<?php
include 'partials/header.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
} else{
    header('location: ' . ROOT_URL . 'admin/manage-user.php');
}
?>

    <section class="form__section">
        <div class="container form__section-container-edituser">
            <h2 class="edituser">Edit User</h2>
            <form action="<?php echo ROOT_URL?>admin/edit-user-logic.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <input type="text" name="fname" value="<?php echo $user['fname']?>" placeholder="First Name">
                <input type="text" name="lname" value="<?php echo $user['lname'] ?>" placeholder="Last Name">
                <select name="userrole">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" name="submit" class="btn">Update User</button>
            </form>
        </div>
    </section>

<?php
include '../partials/footer.php';
?>