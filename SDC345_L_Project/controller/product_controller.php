<?php

require_once(__DIR__ . '/../model/product_db.php');

class ProductController {
    public static function listProducts() {
        return ProductDB::getProducts();
    }

    public static function createProduct($name, $description, $price, $quantity) {
        return ProductDB::addProduct($name, $description, $price, $quantity);
    }

    public static function removeProduct($productId) {
        return ProductDB::deleteProduct($productId);
    }
}