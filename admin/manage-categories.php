<?php
include 'partials/header.php';
?>

<section class="dashboard">
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
            <li><a href="manage-user.php"><i class="uil uil-users-alt"></i>
            <h5>Manage User</h5></a></li>
            <li><a href="add-category.php"><i class="uil uil-edit"></i>
            <h5>Add Category</h5></a></li>
            <li><a href="manage-categories.php" class="active"><i class="uil uil-list-ul"></i>
            <h5>Manage Category</h5></a></li>
            <?php endif ?>
        </ul>
    </aside>
    <main>
        <h2>Manage Categories</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Indian History</td>
                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                </tr>
                <tr>
                    <td>Politics</td>
                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                </tr>
                <tr>
                    <td>Terror Attack</td>
                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </main>
    </div>
</section>


<?php
include '../partials/footer.php';
?>