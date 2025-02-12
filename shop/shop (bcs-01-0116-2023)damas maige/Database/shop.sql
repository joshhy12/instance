 CREATE DATABASE shop;
    USE shop;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(255) NOT NULL,
        registration_number VARCHAR(20) UNIQUE NOT NULL,
        sex ENUM('Male', 'Female') NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        region VARCHAR(255) NOT NULL,
        district VARCHAR(255) NOT NULL,
        password_hash VARCHAR(255) NOT NULL
    );



CREATE TABLE payments (
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20),
    transaction_method VARCHAR(50) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    payment_status ENUM('Pending', 'Completed', 'Failed') NOT NULL,
    service_type VARCHAR(100) NOT NULL,
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
