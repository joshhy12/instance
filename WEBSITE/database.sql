CREATE DATABASE database;
USE database;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    reg_number VARCHAR(15) UNIQUE NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    region VARCHAR(50) NOT NULL,
    district VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE regions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE districts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    region_id INT,
    name VARCHAR(50) NOT NULL,
    FOREIGN KEY (region_id) REFERENCES regions(id)
);
