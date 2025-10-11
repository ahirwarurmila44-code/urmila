<?php

// $servername = "localhost";  // Usually "localhost"
// $username = "root";         // Your MySQL username
// $password = "";             // Your MySQL password
// $database = "youtube_tutorials";      // Your database name
// $port = 3307;               // Default MySQL port 3306


$conn = mysqli_connect('localhost','root','','youtube_tutorials', 3307);
if(!$conn){
    echo " MySQL Connection Failed". mysqli_connect_error();
}

 echo " MySQL is Connected successfully";


/////////////////////////////////  INTERVIEW Questions & Answers  ///////////////////////////////

// 1. How do you connect to a MySQL database using PHP?

// Answer: Using mysqli (procedural):

// // 
// $host = "localhost";
// $user = "root";
// $password = "";
// $database = "test_db";

//  $conn = mysqli_connect($host, $user, $password, $database);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// // 


// Using mysqli (object-oriented):

// $conn = new mysqli($host, $user, $password, $database);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// // Using PDO:

// try {
//     $dsn = "mysql:host=$host;dbname=$database;charset=utf8";
//     $pdo = new PDO($dsn, $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }


// 2. How do you handle connection errors in PHP?

// mysqli procedural: mysqli_connect_error()

// mysqli object-oriented: $conn->connect_error

// PDO: Use try-catch with PDOException.


// 3. What is the difference between mysqli_connect and new mysqli()?

// mysqli_connect → procedural style function.

// new mysqli() → object-oriented style instantiation of mysqli.
// Functionally, both achieve the same result; it depends on coding style preference.

// 4. How do you select a database in PHP after connecting?
// mysqli_select_db($conn, "database_name"); // procedural
// $conn->select_db("database_name");        // object-oriented

// 5. How do you close a database connection?
// mysqli_close($conn); // procedural
// $conn->close();      // object-oriented
// $pdo = null;         // PDO

// 6. What is the difference between mysqli_query() and mysqli_prepare()?

// mysqli_query() → executes a SQL string directly (less secure).

// mysqli_prepare() → creates a prepared statement, safer against SQL injection.

// 7. What are the common connection issues in PHP and MySQL?

// Wrong username/password.

// MySQL server not running.

// Wrong host/port.

// Database doesn’t exist.

// Firewall blocking port.

// 8. How do you switch between mysqli and PDO?

// Use mysqli if your app is MySQL-only and needs simplicity.

// Use PDO if you need multiple database support or named parameters.