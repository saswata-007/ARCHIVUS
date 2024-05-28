<?php
include 'partials/header.php';

// Ensure the user is a moderator
if (!isset($_SESSION['user_is_moderator']) || $_SESSION['user_is_moderator'] !== true) {
    $_SESSION['error'] = "You do not have permission to access this page.";
    header('Location: index.php');
    exit();
}

// Fetch support messages from the database
$query = "SELECT support_id, name, email, subject, message, created_at, resolved FROM support ORDER BY created_at DESC";
$support_messages = mysqli_query($connection, $query);

if (!$support_messages) {
    // Display error message if the query failed
    die("Database query failed: " . mysqli_error($connection));
}

// Handle form submission to update the resolved status
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['support_id'])) {
    $support_id = intval($_POST['support_id']);
    $resolved = isset($_POST['resolved']) ? 1 : 0;
    
    $update_query = "UPDATE support SET resolved = ? WHERE support_id = ?";
    $stmt = $connection->prepare($update_query);
    $stmt->bind_param('ii', $resolved, $support_id);
    
    if ($stmt->execute()) {
        $_SESSION['message-success'] = "Support message updated successfully.";
    } else {
        $_SESSION['error'] = "Failed to update support message: " . $stmt->error;
    }
    
    header('Location: manage-support.php');
    exit();
}

?>

<section class="dashboard">
    <?php if (isset($_SESSION['message-success'])) : ?>
        <div class="success-message container">
            <p>
                <?php 
                echo $_SESSION['message-success'];
                unset($_SESSION['message-success']);
                ?>
            </p>
        </div>
    <?php endif ?>
    <div class="container dashboard__container">
    <aside>
            <ul>
            <li><a href="add-post.php"><i class="uil uil-pen"></i>
            <h5>Add Post</h5></a></li>
            <li><a href="index.php" ><i class="uil uil-postcard"></i>
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
            <li><a href="manage-comments.php"><i class="uil uil-comment-dots"></i>
            <h5>Manage Comments</h5></a></li>
            <li><a href="manage-support.php" class="active"><i class="uil uil-envelope"></i>
            <h5>Manage Support</h5></a></li>
            <?php endif ?>
        </ul>
    </aside>
        <main>
            <h2>Manage Support Messages</h2>
            <?php if (mysqli_num_rows($support_messages) > 0) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Resolved</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($message = mysqli_fetch_assoc($support_messages)) : ?>
                            <tr>
                                <td><?= htmlspecialchars($message['name']) ?></td>
                                <td><?= htmlspecialchars($message['email']) ?></td>
                                <td><?= htmlspecialchars($message['subject']) ?></td>
                                <td><?= htmlspecialchars($message['message']) ?></td>
                                <td><?= htmlspecialchars($message['created_at']) ?></td>
                                <td>
                                    <form class="support" action="manage-support.php" method="post">
                                        <input type="hidden" name="support_id" value="<?= $message['support_id'] ?>">
                                        <input class="checkbox" type="checkbox" name="resolved" <?= $message['resolved'] ? 'checked' : '' ?> onChange="this.form.submit()">
                                    </form>
                                </td>
                                <td><a href="delete-support.php?id=<?= $message['support_id'] ?>" class="btn sm danger">Delete</a></td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="error-message"><?= "NO SUPPORT MESSAGES FOUND" ?></div>
            <?php endif ?>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php';
?>
