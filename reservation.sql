-- Create a new database for reservations
CREATE DATABASE reservations;
USE reservations;

-- Create a table for reservations
CREATE TABLE reservations (
  reservation_id INT AUTO_INCREMENT PRIMARY KEY,
  date DATE NOT NULL,
  time TIME NOT NULL,
  number_of_guests INT NOT NULL,
  event VARCHAR(255) NOT NULL
);
