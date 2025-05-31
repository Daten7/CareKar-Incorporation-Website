-- CareKar Database Setup Script

-- Create databases
CREATE DATABASE IF NOT EXISTS worker;
CREATE DATABASE IF NOT EXISTS customer;
CREATE DATABASE IF NOT EXISTS booking;

-- Use worker database
USE worker;

-- Create tables for worker database
CREATE TABLE IF NOT EXISTS signUp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    Username VARCHAR(50) UNIQUE NOT NULL,
    Password VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS workerlogin (
    ID INT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS dailyactivities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    workerID INT,
    JobDate DATE,
    CarNumber VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS customercontact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Subject VARCHAR(200),
    Message TEXT
);

CREATE TABLE IF NOT EXISTS booking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    ServiceDate DATE,
    SpecialRequest TEXT
);

-- Use customer database
USE customer;

CREATE TABLE IF NOT EXISTS customerinformation (
    CarNo VARCHAR(20) PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Address VARCHAR(200),
    CarMake VARCHAR(50)
);

-- Insert sample data
INSERT INTO customerinformation (CarNo, Name, Address, CarMake) VALUES
('TR-4325', 'Wren Gen', 'Accra, Ghana', 'Alpine');

-- Use booking database  
USE booking;

CREATE TABLE IF NOT EXISTS signUp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) UNIQUE NOT NULL,
    Password VARCHAR(100) NOT NULL
);

-- Grant permissions (if needed)
-- GRANT ALL PRIVILEGES ON worker.* TO 'root'@'localhost';
-- GRANT ALL PRIVILEGES ON customer.* TO 'root'@'localhost';
-- GRANT ALL PRIVILEGES ON booking.* TO 'root'@'localhost';
-- FLUSH PRIVILEGES;
