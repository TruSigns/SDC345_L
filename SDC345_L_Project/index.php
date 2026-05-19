<?php
require_once("config/database.php");

$pageTitle = "Week 3 MVC Project";
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
    <h1>Week 3 Development: MVC and Database Objects</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="#">Login</a>
    <a href="#">Dashboard</a>
    <a href="view/product_list.php">Products</a>
    <a href="#">Orders</a>
</nav>

<main>
    <section>
        <h2>Project Overview</h2>
        <p>
            This project is a PHP web application that uses a MySQL database.
            For Week 3, the focus is on using MVC structure and representing
            database tables with PHP classes and objects.
        </p>
    </section>

    <section>
        <h2>Week 3 Goals</h2>
        <ul>
            <li>Create model classes for database tables</li>
            <li>Create database classes for CRUD operations</li>
            <li>Create controller files to connect the model and view</li>
            <li>Display product data from the database</li>
            <li>Test database operations through the web application</li>
        </ul>
    </section>

    <section>
        <h2>Week 3 Work Breakdown</h2>

        <table>
            <tr>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>Planned Completion</th>
            </tr>
            <tr>
                <td>Create Model Classes</td>
                <td>Build PHP classes that represent database tables.</td>
                <td>05/25/2026</td>
            </tr>
            <tr>
                <td>Create CRUD Functions</td>
                <td>Add create, read, update, and delete database operations.</td>
                <td>05/26/2026</td>
            </tr>
            <tr>
                <td>Build Controller Files</td>
                <td>Create controller files that connect the model files to the user interface.</td>
                <td>05/27/2026</td>
            </tr>
            <tr>
                <td>Test Database Operations</td>
                <td>Test that the application can read product data from the database.</td>
                <td>05/28/2026</td>
            </tr>
            <tr>
                <td>Finish Validation Functions</td>
                <td>Complete validation logic that was not finished during Week 2.</td>
                <td>05/24/2026</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>MVC Structure</h2>

        <h3>Model</h3>
        <p>
            The model files represent the database data and handle database operations.
            In this project, the product model represents the products table.
        </p>

        <h3>View</h3>
        <p>
            The view files display information to the user.
            In this project, the product list page displays products from the database.
        </p>

        <h3>Controller</h3>
        <p>
            The controller connects the model and view.
            It gets data from the database class and sends it to the page that displays it.
        </p>
    </section>

    <section>
        <h2>Database Tables</h2>

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
        <h2>Product Page</h2>
        <p>
            Click the button below to view product records from the database using the Week 3 MVC structure.
        </p>

        <a class="button" href="view/product_list.php">View Products</a>
    </section>

    <section>
        <h2>Week 3 Reflection</h2>
        <p>
            This week helped me understand how MVC separates the application into cleaner parts.
            I also learned how PHP classes can represent database tables and make the project easier to organize.
        </p>
    </section>
</main>

<footer>
    <p>&copy; 2026 Week 3 MVC Project</p>
</footer>

</body>
</html>