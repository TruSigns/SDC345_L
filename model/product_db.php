<?php

require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/product.php');

class ProductDB {
    public static function getProducts() {
        global $conn;

        $products = [];
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = new Product(
                    $row['product_id'],
                    $row['product_name'],
                    $row['product_description'],
                    $row['price'],
                    $row['quantity']
                );
            }
        }

        return $products;
    }

    public static function addProduct($name, $description, $price, $quantity) {
        global $conn;

        $sql = "INSERT INTO products (product_name, product_description, price, quantity)
                VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdi", $name, $description, $price, $quantity);

        return $stmt->execute();
    }

    public static function deleteProduct($productId) {
        global $conn;

        $sql = "DELETE FROM products WHERE product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $productId);

        return $stmt->execute();
    }
}