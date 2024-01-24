<?php
require_once 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $delete_user_id = $_POST['delete_user_id'];
    $stmt = $conn->prepare("DELETE FROM user_data WHERE id = ?");
    $stmt->bind_param("i", $delete_user_id);
    $stmt->execute();
    $stmt->close();
}

$result = $conn->query("SELECT id, username, email FROM user_data");
?>

<html>
<body>
    <h2>User List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="delete_user_id" value="<?= $row['id'] ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
