-- Adatbázis létrehozása
CREATE DATABASE IF NOT EXISTS speedwash CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Adatbázis használata
USE speedwash;

-- Users tábla
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Machines tábla
CREATE TABLE machines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    status ENUM('available', 'in-use') DEFAULT 'available',
    remaining_time INT DEFAULT NULL
);

-- Reservations tábla
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    machine_id INT NOT NULL,
    start_time DATETIME NOT NULL,
    end_time DATETIME NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (machine_id) REFERENCES machines(id)
);
