<?php
require_once("auth/auth_check.php");
require_once("config/database.php");

$sql = "
SELECT complaints.complaint_id, complaints.complaint_description, complaints.status,
customers.first_name AS customer_first, customers.last_name AS customer_last,
employees.first_name AS tech_first, employees.last_name AS tech_last
FROM complaints
JOIN customers ON complaints.customer_id = customers.customer_id
LEFT JOIN employees ON complaints.technician_id = employees.employee_id
WHERE complaints.status = 'Open'
";

$result = $conn->query($sql);
?>

<h1>Open Complaints</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Customer</th>
        <th>Description</th>
        <th>Technician</th>
        <th>Status</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row["complaint_id"]; ?></td>
            <td><?php echo $row["customer_first"] . " " . $row["customer_last"]; ?></td>
            <td><?php echo $row["complaint_description"]; ?></td>
            <td>
                <?php
                if ($row["tech_first"]) {
                    echo $row["tech_first"] . " " . $row["tech_last"];
                } else {
                    echo "Unassigned";
                }
                ?>
            </td>
            <td><?php echo $row["status"]; ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<br>
<a href="assign_complaint.php">Assign Complaint</a>
<br><br>
<a href="dashboard.php">Back to Dashboard</a>