CREATE DATABASE career_counseling;

USE career_counseling;

CREATE TABLE admin_users (
    id INT IDENTITY(1,1) PRIMARY KEY,  -- Auto-incrementing column
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin_users (email, password) VALUES 
('muneeb122@gmail.com', 'abcd123!'),
('muzzamil012@gmail.com', 'qwer123@'),
('zaeem028@gmail.com', 'asdf12#$'),
('mohsin005@gmail.com', 'abcd12^!');

CREATE TABLE users (
    id INT IDENTITY(1,1) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    gender VARCHAR(10) CHECK (gender IN ('Male', 'Female', 'Other')) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    contact VARCHAR(15),
    city VARCHAR(100),
    created_at DATETIME DEFAULT GETDATE()
);

select * from users