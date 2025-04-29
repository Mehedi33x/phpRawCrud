🚀 Crud Files
│
├── db.php         # Database connection
├── index.php      # List all users (Read All)
├── create.php     # Add new user (Create)
├── view.php       # View single user (Read Single)
├── edit.php       # Update user details (Update)
└── delete.php     # Remove a user (Delete)
------------------------------------------------------
⚙️Database Setup
CREATE DATABASE crud_app;
USE crud_app;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
------------------------------------------------------
⚙️Database Connection
$host = 'localhost';
$user = 'root';     // Default for XAMPP/WAMP
$pass = '';         // Default for XAMPP/WAMP
$dbname = 'crud_app';
------------------------------------------------------
🚀 Run the project on a local server (like XAMPP, WAMP, or MAMP).
------------------------------------------------------
🚀 Access via browser
http://localhost/phpRawCrud/index.php

🚀 Screenshot
Create Page 
![Create Page](/create.png)

View Page 
![View Page](/view.png)

Edit Page 
![Edit Page](/edit.png)



