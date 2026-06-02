<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    die("You do not have permission to access this page.");
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["image_file"]) && $_FILES["image_file"]["error"] == 0) {

        $uploadDirectory = "uploads/";

        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        $fileName = basename($_FILES["image_file"]["name"]);
        $targetFile = $uploadDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedTypes = array("jpg", "jpeg", "png", "gif");

        if (in_array($fileType, $allowedTypes)) {

            if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $targetFile)) {
                $message = "File uploaded successfully.";
            } else {
                $message = "There was an error uploading the file.";
            }

        } else {
            $message = "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    }

    if (!empty($_POST["note"])) {

        $notesDirectory = "notes/";

        if (!is_dir($notesDirectory)) {
            mkdir($notesDirectory, 0777, true);
        }

        $noteText = $_POST["note"];
        $noteFile = $notesDirectory . "project_notes.txt";

        file_put_contents($noteFile, $noteText . PHP_EOL, FILE_APPEND);

        $message .= " Note saved successfully.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 5 File Support</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Week 5 File Support</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="upload.php">File Upload</a>
    <a href="logout.php">Logout</a>
</nav>

<main>
    <section>
        <h2>Upload Image File</h2>

        <?php if ($message != "") : ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data">
            <label>Select Image:</label><br>
            <input type="file" name="image_file"><br><br>

            <label>Project Note:</label><br>
            <textarea name="note" rows="5" cols="50"></textarea><br><br>

            <button type="submit">Submit</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2026 Week 5 Final Project</p>
</footer>

</body>
</html>