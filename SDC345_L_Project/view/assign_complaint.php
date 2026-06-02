<?php
require_once("auth/auth_check.php");
require_once("config/database.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $complaint_id = $_POST["complaint_id"];
    $technician_id = $_POST["technician_id"];

    $stmt = $conn->prepare("UPDATE complaints SET technician_id = ? WHERE complaint_id = ?");
    $stmt->bind_param("ii", $technician_id, $complaint_id);

    if ($stmt->execute()) {
        $message = "Complaint assigned successfully.";
    } else {
        $message = "Error assigning complaint.";
    }
}

$complaints = $conn->query("SELECT * FROM complaints WHERE status = 'Open' AND technician_id IS NULL");
$technicians = $conn->query("SELECT * FROM employees WHERE level = 'Technician'");
?>

<h1>Assign Complaint to Technician</h1>

<p><?php echo $message; ?></p>

<form method="POST">
    <label>Complaint:</label><br>
    <select name="complaint_id" required>
        <?php while ($row = $complaints->fetch_assoc()) : ?>
            <option value="<?php echo $row["complaint_id"]; ?>">
                <?php echo $row["complaint_description"]; ?>
            </option>
        <?php endwhile; ?>
    </select>

    <br><br>

    <label>Technician:</label><br>
    <select name="technician_id" required>
        <?php while ($row = $technicians->fetch_assoc()) : ?>
            <option value="<?php echo $row["employee_id"]; ?>">
                <?php echo $row["first_name"] . " " . $row["last_name"]; ?>
            </option>
        <?php endwhile; ?>
    </select>

    <br><br>

    <button type="submit">Assign Complaint</button>
</form>

<br>
<a href="complaints.php">View Complaints</a>
<br><br>
<a href="dashboard.php">Back to Dashboard</a>