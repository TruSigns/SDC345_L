<?php
$pageTitle = "Week 1 Project Planning";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Week 1 Planning: Project Inception & Planning</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="#">Login</a>
    <a href="#">Dashboard</a>
    <a href="#">Products</a>
    <a href="#">Orders</a>
</nav>

<main>
    <section>
        <h2>Project Overview</h2>
        <p>
            The goal of this project is to design and begin development of a PHP web application
            with a MySQL database backend. During Week 1, the main focus is planning the
            application structure, organizing development tasks, and designing the database and
            user interface.
        </p>
    </section>

    <section>
        <h2>Project Goals</h2>
        <ul>
            <li>Design the overall application structure</li>
            <li>Create the database plan and table structure</li>
            <li>Plan application pages and navigation</li>
            <li>Organize project tasks into manageable work items</li>
            <li>Prepare for development in upcoming weeks</li>
        </ul>
    </section>

    <section>
        <h2>Week 1 Work Breakdown</h2>

        <table>
            <tr>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>Planned Completion</th>
            </tr>
            <tr>
                <td>Define Project Requirements</td>
                <td>Review project instructions and identify required features.</td>
                <td>05/14/2026</td>
            </tr>
            <tr>
                <td>Design Database Structure</td>
                <td>Plan database tables, keys, and relationships.</td>
                <td>05/15/2026</td>
            </tr>
            <tr>
                <td>Create UI Layout Plan</td>
                <td>Plan pages, navigation, and basic user interface layout.</td>
                <td>05/15/2026</td>
            </tr>
            <tr>
                <td>Setup Development Environment</td>
                <td>Configure XAMPP, VS Code, PHP files, and project folders.</td>
                <td>05/16/2026</td>
            </tr>
            <tr>
                <td>Create Initial Project Files</td>
                <td>Create starter PHP, CSS, and database files.</td>
                <td>05/17/2026</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>Database Design Plan</h2>

        <h3>Users Table</h3>
        <ul>
            <li>user_id</li>
            <li>first_name</li>
            <li>last_name</li>
            <li>email</li>
            <li>password</li>
            <li>role</li>
        </ul>

        <h3>Products Table</h3>
        <ul>
            <li>product_id</li>
            <li>product_name</li>
            <li>product_description</li>
            <li>price</li>
            <li>quantity</li>
        </ul>

        <h3>Orders Table</h3>
        <ul>
            <li>order_id</li>
            <li>user_id</li>
            <li>order_date</li>
            <li>total_amount</li>
        </ul>
    </section>

    <section>
        <h2>Week 1 Reflection</h2>
        <p>
            The planning process helped organize the project into smaller tasks that are easier
            to manage. The database and page structure became clearer after reviewing the project
            requirements.
        </p>
    </section>
</main>

<footer>
    <p>&copy; 2026 Week 1 Project Planning</p>
</footer>

</body>
</html>