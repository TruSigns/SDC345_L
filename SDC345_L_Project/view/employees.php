<?php
require_once("auth/auth_check.php");
require_once("config/database.php");

$result = $conn->query("SELECT * FROM employees");
?>

<h1>Employee List</h1>

<a href="add_employee.php">Add Employee</a>

<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Extension</th>
        <th>Level</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row["employee_id"]; ?></td>
            <td><?php echo $row["user_id"]; ?></td>
            <td><?php echo $row["first_name"] . " " . $row["last_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone_extension"]; ?></td>
            <td><?php echo $row["level"]; ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<br>
<a href="dashboard.php">Back to Dashboard</a>