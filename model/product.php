<?php

class Product {
    private $productId;
    private $productName;
    private $productDescription;
    private $price;
    private $quantity;

    public function __construct($productId, $productName, $productDescription, $price, $quantity) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getProductDescription() {
        return $this->productDescription;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}