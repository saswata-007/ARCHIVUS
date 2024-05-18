<?php
include 'partials/header.php';

// FETCH USERS FROM DATABASE BUT NOT CURRENT USER
$current_moderator_id = $_SESSION['user-id'];

$query = "SELECT * FROM users WHERE NOT id=$current_moderator_id";
$users = mysqli_query($connection, $query);
?>

<section class="dashboard">
<?php if(isset($_SESSION['add-user-success'])) : //SHOWS IF ADD USER WAS SUCCESSFUL ?>
    <div class="success-message container">
        <p>
            <?php 
            echo $_SESSION['add-user-success'];
            unset($_SESSION['add-user-success']);
            ?>
        </p>
    </div>
    <?php elseif(isset($_SESSION['edit-user-success'])) : //SHOWS IF EDIT USER WAS SUCCESSFUL ?>
    <div class="success-message container">
        <p>
            <?php 
            echo $_SESSION['edit-user-success'];
            unset($_SESSION['edit-user-success']);
            ?>
        </p>
    </div>
    <?php elseif(isset($_SESSION['edit-user'])) : //SHOWS IF EDIT USER WASN'T SUCCESSFUL ?>
    <div class="error-message container">
        <p>
            <?php 
            echo $_SESSION['edit-user'];
            unset($_SESSION['edit-user']);
            ?>
        </p>
    </div>
    <?php elseif(isset($_SESSION['delete-user'])) : //SHOWS IF delete USER WASN'T SUCCESSFUL ?>
    <div class="error-message container">
        <p>
            <?php 
            echo $_SESSION['delete-user'];
            unset($_SESSION['delete-user']);
            ?>
        </p>
    </div>
    <?php elseif(isset($_SESSION['delete-user-success'])) : //SHOWS IF delete USER IS SUCCESSFUL ?>
    <div class="success-message container">
        <p>
            <?php 
            echo $_SESSION['delete-user-success'];
            unset($_SESSION['delete-user-success']);
            ?>
        </p>
    </div>
    <?php endif ?>
    <div class="container dashboard__container">
        <aside>
            <ul>
            <li><a href="add-post.php"><i class="uil uil-pen"></i>
            <h5>Add Post</h5></a></li>
            <li><a href="index.php"><i class="uil uil-postcard"></i>
            <h5>Manage Post</h5></a></li>
            <?php if(isset($_SESSION['user_is_moderator'])): ?>
            <li><a href="add-user.php"><i class="uil uil-user-plus"></i>
            <h5>Add User</h5></a></li>
            <li><a href="manage-user.php"class="active"><i class="uil uil-users-alt"></i>
            <h5>Manage User</h5></a></li>
            <li><a href="add-category.php"><i class="uil uil-edit"></i>
            <h5>Add Category</h5></a></li>
            <li><a href="manage-categories.php"><i class="uil uil-list-ul"></i>
            <h5>Manage Category</h5></a></li>
            <?php endif ?>
        </ul>
    </aside>
    <main>
        <h2>Manage Users</h2>
        <?php if(mysqli_num_rows($users)>0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
                <?php while($user = mysqli_fetch_assoc($users)) : ?>
                <tr>
                    <td><?php echo "{$user['fname']} {$user['lname']}" ?></td>
                    <td><?php echo "{$user['username']}" ?></td>
                    <td><a href="<?php echo ROOT_URL?>admin/edit-user.php?id=<?php echo $user['id']?>" class="btn sm">Edit</a></td>
                    <td><a href="<?php echo ROOT_URL?>admin/delete-user.php?id=<?php echo $user['id']?>" class="btn sm danger">Delete</a></td>
                    <td><?php echo $user['is_moderator'] ? 'Yes' : 'No' ?></td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <?php else : ?>
            <div class="error-message"><?= "NO USERS FOUND" ?></div>
        <?php endif ?>
    </main>
    </div>
</section>


<?php
include '../partials/footer.php';
?>