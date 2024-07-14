<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?> to my website</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
