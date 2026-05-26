<?php
require_once(__DIR__ . '/../controller/product_controller.php');

$products = ProductController::listProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 3 Products</title>
</head>
<body>

<h1>Product List</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>

    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product->getProductId(); ?></td>
            <td><?php echo $product->getProductName(); ?></td>
            <td><?php echo $product->getProductDescription(); ?></td>
            <td>$<?php echo $product->getPrice(); ?></td>
            <td><?php echo $product->getQuantity(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>