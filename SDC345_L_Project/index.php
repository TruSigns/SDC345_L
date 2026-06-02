<?php
require_once("config/database.php");

$pageTitle = "Week 4 Site Security Project";
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
    <h1>Week 4 Development: Site Security</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="view/product_list.php">Products</a>
    <a href="#">Orders</a>
    <a href="logout.php">Logout</a>
    <a href="upload.php">File Upload</a>
    <a href="customers.php">Customers</a>
    <a href="employees.php">Employees</a>
    <a href="complaints.php">Complaints</a>
    <a href="assign_complaint.php">Assign Complaint</a>
</nav>
<main>
    <section>
        <h2>Project Overview</h2>
        <p>
            This project is a PHP web application that uses a MySQL database.
            For Week 4, the focus is on adding site security through authentication,
            authorization, sessions, and HTTPS awareness.
        </p>
    </section>

    <section>
        <h2>Week 4 Goals</h2>
        <ul>
            <li>Add a login system for authentication</li>
            <li>Create user roles for authorization</li>
            <li>Protect pages using PHP sessions</li>
            <li>Limit access to certain pages based on login status</li>
            <li>Understand why HTTPS is needed for secure data transfer</li>
        </ul>
    </section>

    <section>
        <h2>Week 4 Work Breakdown</h2>

        <table>
            <tr>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>Planned Completion</th>
            </tr>
            <tr>
                <td>Add Login System</td>
                <td>Create an authentication system with a login form.</td>
                <td>06/01/2026</td>
            </tr>
            <tr>
                <td>Create User Roles</td>
                <td>Add authorization levels such as Admin and User.</td>
                <td>06/02/2026</td>
            </tr>
            <tr>
                <td>Secure Pages</td>
                <td>Restrict access to protected pages using PHP sessions.</td>
                <td>06/03/2026</td>
            </tr>
            <tr>
                <td>Enable HTTPS Support</td>
                <td>Review how HTTPS protects login and user data.</td>
                <td>06/04/2026</td>
            </tr>
            <tr>
                <td>Finish Controller Testing</td>
                <td>Complete remaining controller testing from Week 3.</td>
                <td>05/31/2026</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>Security Concepts</h2>

        <h3>Authentication</h3>
        <p>
            Authentication checks who the user is.
            In this project, the login form verifies the user by checking their email and password.
        </p>

        <h3>Authorization</h3>
        <p>
            Authorization checks what the user is allowed to access after logging in.
            In this project, user roles can be used to control which pages or features a user can use.
        </p>

        <h3>HTTPS</h3>
        <p>
            HTTPS helps protect information sent between the user and the website.
            This is important for login forms because passwords and user data should not be sent in plain text.
        </p>
    </section>

    <section>
        <h2>Protected Pages</h2>
        <p>
            The dashboard page is protected using a PHP session check.
            Users must log in before they can access protected content.
        </p>

        <a class="button" href="login.php">Go to Login</a>
        <a class="button" href="dashboard.php">Go to Dashboard</a>
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
        <h2>Week 4 Reflection</h2>
        <p>
            This week helped me understand why security needs to be added before sharing an application with other users.
            I learned that authentication verifies the user, authorization controls access, and HTTPS helps protect user information.
        </p>
    </section>
</main>

<footer>
    <p>&copy; 2026 Week 4 Site Security Project</p>
</footer>

</body>
</html>