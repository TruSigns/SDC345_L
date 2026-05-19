CREATE DATABASE IF NOT EXISTS week1_project_db;

USE week1_project_db;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(25) NOT NULL
);

CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    product_description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL
);

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    order_date DATE NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

INSERT INTO products (product_name, product_description, price, quantity)
VALUES
('Laptop', 'Basic student laptop', 599.99, 10),
('Mouse', 'Wireless computer mouse', 19.99, 25),
('Keyboard', 'USB keyboard', 29.99, 15);

INSERT INTO users (first_name, last_name, email, password, role)
VALUES
('Reese', 'Ruffin', 'reese@example.com', 'password123', 'Admin'),
('John', 'Smith', 'john@example.com', 'password123', 'User');

INSERT INTO orders (user_id, order_date, total_amount)
VALUES
(1, '2026-05-19', 619.98),
(2, '2026-05-20', 29.99);