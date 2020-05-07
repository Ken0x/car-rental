# Car Rental with User Registration System

# Install
Create your own database and change the name in server.php on line 11
Add a table in your database called "users"
Paste this sql script:
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
