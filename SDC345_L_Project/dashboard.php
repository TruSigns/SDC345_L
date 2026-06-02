<?php
session_start();

/* Check if user is logged in */
if (!isset($_SESSION["user_id"])) {

    die("You do not have permission to access this page.");
}

/* Check if user is an Admin */
if ($_SESSION["role"] != "Admin") {

    die("Access denied. Admins only.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Admin Dashboard</h1>

<p>Welcome, <?php echo $_SESSION["first_name"]; ?>!</p>

<p>Your role is: <?php echo $_SESSION["role"]; ?></p>

<a href="view/product_list.php">View Products</a>
<a href="upload.php">Upload File</a>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>