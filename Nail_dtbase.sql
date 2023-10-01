create database Nail_dtbase;
use Nail_dtbase;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(10),
    userName VARCHAR(50),
    password VARCHAR(100)
);

CREATE TABLE nail_care_products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nameProduct VARCHAR(100),
    price DECIMAL(10, 2),
    quantity INT
);

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL
);


