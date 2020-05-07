# Car Rental with User Registration System

# Install
Create your own database and change the name in server.php on line 11

Add a table in your database called "users"

Paste this SQL script in SQL query:

```
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
