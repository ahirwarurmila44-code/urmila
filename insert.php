<?php
$conn = new mysqli('localhost','root','','youtube_tutorials', 3307);
if(!$conn){
    echo " MySQL Connection Failed". $conn->connect_error();
}

if(isset($_POST['submit'])){
  //print_r($_POST);
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql ="INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";

  if($conn->query($sql)){
    echo "Data inserted successfully";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
   </head>
   <body>
      <div class="container mt-5">
         <div class="row">
            <div class="col-sm-8">
                <h3>Insert Operation in PHP</h3>
               <form action="" method="POST" class="border p-3">
                  <div class="mb-3 mt-3">
                     <input type="text" name="name" class="form-control" placeholder="Enter Name" >
                  </div>
                  <div class="mb-3 mt-3">
                     <input type="email" name="email" class="form-control" placeholder="Enter Email" >
                  </div>
                  <div class="mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Enter Password" >
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>

<?php

// 1️⃣ Q: How do you insert data into a MySQL table using PHP?

// Answer:
// You can use mysqli or PDO. Here’s a simple mysqli example:

// <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testdb";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if($conn->connect_error){
//     die("Connection failed: " . $conn->connect_error);
// }

// // Insert query
// $sql = "INSERT INTO users (username, email) VALUES ('JohnDoe', 'john@example.com')";

// if($conn->query($sql) === TRUE){
//     echo "Record inserted successfully!";
// } else {
//     echo "Error: " . $conn->error;
// }

// $conn->close();
// ?>

<!-- // ✅ Key points: INSERT INTO table_name (columns) VALUES (values)

// 2️⃣ Q: How to insert data using prepared statements? Why?

// Answer:
// Prepared statements prevent SQL injection and improve security. -->

 <?php
// $conn = new mysqli("localhost", "root", "", "testdb");

// $stmt = $conn->prepare("INSERT INTO users (username, email) VALUES (?, ?)");
// $stmt->bind_param("ss", $username, $email);

// $username = "JaneDoe";
// $email = "jane@example.com";

// $stmt->execute();
// echo "Record inserted successfully!";

// $stmt->close();
// $conn->close();
// ?>


<!-- // 3️⃣ Q: How do you insert multiple rows at once?
// $sql = "INSERT INTO users (username, email) VALUES 
//         ('User1', 'user1@example.com'),
//         ('User2', 'user2@example.com'),
//         ('User3', 'user3@example.com')";

// if($conn->query($sql) === TRUE){
//     echo "Multiple records inserted successfully!";
// }


// Tip: Efficient for bulk inserts. Can also use prepared statements in a loop.

// 4️⃣ Q: How to insert data dynamically from an HTML form?
// <form method="post">
//     Username: <input type="text" name="username">
//     Email: <input type="email" name="email">
//     <input type="submit" name="submit" value="Add User">
// </form>

// <?php
// if(isset($_POST['submit'])){
//     $username = $_POST['username'];
//     $email = $_POST['email']; -->

//     $stmt = $conn->prepare("INSERT INTO users (username, email) VALUES (?, ?)");
//     $stmt->bind_param("ss", $username, $email);
//     $stmt->execute();
// }
// ?>


// Tip: Always sanitize inputs using prepared statements.

// 5️⃣ Q: How do you get the last inserted ID?
// $conn->query("INSERT INTO users (username, email) VALUES ('Mike', 'mike@example.com')");
// $last_id = $conn->insert_id;
// echo "Last inserted ID: " . $last_id;


// Use case: Useful for foreign key relations, e.g., inserting into orders after inserting users.

// 6️⃣ Q: What happens if a required field is missing?

// MySQL throws an error if a NOT NULL column is missing a value.

// In PHP, you can handle this using try-catch or checking $_POST values before insert.

// if(empty($_POST['username']) || empty($_POST['email'])){
//     echo "All fields are required!";
// } else {
//     // perform insert
// }

// 7️⃣ Q: Difference between mysqli_query and prepare + execute for insert?
// Aspect	mysqli_query	prepare + execute
// Security	Vulnerable to SQL injection	Secure
// Performance	Slightly faster for one-off inserts	Better for repeated inserts with different values
// Complexity	Simple	Slightly more code
// 8️⃣ Q: How to insert data and handle duplicate entries?

// Use INSERT IGNORE → skips duplicate rows

// Use ON DUPLICATE KEY UPDATE → updates existing row if primary key or unique key conflicts

// $sql = "INSERT INTO users (email, username) VALUES ('john@example.com', 'John') 
//         ON DUPLICATE KEY UPDATE username='John'";

// 9️⃣ Q: How to insert data using PDO?
// <?php
// try {
//     $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
//     $stmt->execute([
//         ':username' => 'Alice',
//         ':email' => 'alice@example.com'
//     ]);

//     echo "Record inserted successfully!";
// } catch(PDOException $e){
//     echo "Error: " . $e->getMessage();
// }
// ?>


// ✅ PDO is database-independent and safer than mysqli. -->