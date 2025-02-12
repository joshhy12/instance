 CREATE DATABASE media;
    USE media;

    CREATE TABLE customer (
        id INT AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(255) NOT NULL,
        registration_number VARCHAR(20) UNIQUE ,
        sex ENUM('Male', 'Female') NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        region VARCHAR(255) NOT NULL,
        district VARCHAR(255) NOT NULL,
        password_hash VARCHAR(255) NOT NULL
    );



