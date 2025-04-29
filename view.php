<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM users WHERE id = $id");

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found!";
    exit;
}
?>

<h2>User Details</h2>

<p><strong>ID:</strong> <?= $user['id'] ?></p>
<p><strong>Name:</strong> <?= $user['name'] ?></p>
<p><strong>Email:</strong> <?= $user['email'] ?></p>
<p><strong>Created At:</strong> <?= $user['created_at'] ?></p>

<a href="index.php">Back to List</a>
