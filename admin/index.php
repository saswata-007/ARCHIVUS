<?php
include 'partials/header.php';
?>
<!--==========================================================featured============================================> -->
<section class="dashboard">
    <div class="container dashboard__container">
        <aside>
            <ul>
            <li><a href="add-post.php"><i class="uil uil-pen"></i>
            <h5>Add Post</h5></a></li>
            <li><a href="index.php" class="active"><i class="uil uil-postcard"></i>
            <h5>Manage Post</h5></a></li>
            <?php if(isset($_SESSION['user_is_moderator'])): ?>
            <li><a href="add-user.php"><i class="uil uil-user-plus"></i>
            <h5>Add User</h5></a></li>
            <li><a href="manage-user.php"><i class="uil uil-users-alt"></i>
            <h5>Manage User</h5></a></li>
            <li><a href="add-category.php"><i class="uil uil-edit"></i>
            <h5>Add Category</h5></a></li>
            <li><a href="manage-categories.php"><i class="uil uil-list-ul"></i>
            <h5>Manage Category</h5></a></li>
            <?php endif ?>
        </ul>
    </aside>
    <main>
        <h2>Manage Posts</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Independent India</td>
                    <td>indian History</td>
                    <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                    <td><a href="delete-user.html" class="btn sm danger">Delete</a></td>
                </tr>
                <tr>
                    <td>Great war ends</td>
                    <td>War</td>
                    <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                    <td><a href="delete-user.html" class="btn sm danger">Delete</a></td>
                </tr>
                <tr>
                    <td>Titanic sink</td>
                    <td>Accident</td>
                    <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                    <td><a href="delete-user.html" class="btn sm danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </main>
    </div>
</section>


<?php
include '../partials/footer.php';
?>