Q1. How do you submit a form in PHP?

Answer:
By using an HTML <form> element with the action and method attributes.
Example:

<form action="process.php" method="POST">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>


In process.php, you access the submitted data using:

$name = $_POST['name'];

Q2. What are the different form methods in PHP?

Answer:
There are two main methods:

GET → Sends data via the URL (visible to user, limited size).

POST → Sends data in HTTP body (hidden from URL, used for sensitive data).

Q3. What is the difference between $_GET and $_POST?
Feature	$_GET	$_POST
Data Visibility	Visible in URL	Hidden
Data Limit	Limited (~2000 chars)	No size limit
Security	Less secure	More secure
Use Case	Search, filters, links	Login, registration, sensitive data

Q4. What is the purpose of action and method attributes in a form?

Answer:

action → Defines the PHP file where data is sent for processing.

method → Defines how the data is sent (GET or POST).

Q5. What is $_SERVER['REQUEST_METHOD'] used for?

Answer:
It checks which method (GET or POST) was used to submit the form.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // handle form submission
}

Q6. How do you validate form input in PHP?

Answer:
Use empty() or isset() to ensure required fields are not blank.

if (empty($_POST['email'])) {
    echo "Email is required";
}

Q7. How can you prevent XSS (Cross-Site Scripting) in form submission?

Answer:
Use htmlspecialchars() or strip_tags() before outputting data.

echo htmlspecialchars($_POST['name']);

Q8. What function is used to check if a form is submitted?

Answer:
Check the request method or button click:

if (isset($_POST['submit'])) { ... }


or

if ($_SERVER['REQUEST_METHOD'] == 'POST') { ... }

Q9. How do you retain form data after submission (sticky form)?

Answer:
By setting the input value using PHP:

<input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">

Q10. What happens if a form’s action is empty?

Answer:
The form will submit to the same page.

Q11. What is the default method if method is not specified?

Answer:
The default method is GET.

Q12. Can you submit a form without using a submit button?

Answer:
Yes, using JavaScript:

document.getElementById("myForm").submit();



//////////////  insert Q/A


// Q: How do you insert data into a MySQL table using PHP?

// Answer:

// // Insert query
// $sql = "INSERT INTO users (username, email) VALUES ('JohnDoe', 'john@example.com')";

// if($conn->query($sql) === TRUE){
//     echo "Record inserted successfully!";
// } else {
//     echo "Error: " . $conn->error;
// }
 // ✅ Key points: INSERT INTO table_name (columns) VALUES (values)
 
 // Q: How do you insert multiple rows at once?
// $sql = "INSERT INTO users (username, email) VALUES 
//         ('User1', 'user1@example.com'),
//         ('User2', 'user2@example.com'),
//         ('User3', 'user3@example.com')";

// if($conn->query($sql) === TRUE){
//     echo "Multiple records inserted successfully!";
// }

// Q: How to insert data dynamically from an HTML form?
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
// 

// Q: How do you get the last inserted ID?
// $conn->query("INSERT INTO users (username, email) VALUES ('Mike', 'mike@example.com')");
// $last_id = $conn->insert_id;
// echo "Last inserted ID: " . $last_id;

// Q: What happens if a required field is missing?

// MySQL throws an error if a NOT NULL column is missing a value.

// In PHP, you can handle this using try-catch or checking $_POST values before insert.

// if(empty($_POST['username']) || empty($_POST['email'])){
//     echo "All fields are required!";
// } else {
//     // perform insert
// }
// Q: How to insert data and handle duplicate entries?

// Use INSERT IGNORE → skips duplicate rows

// Use ON DUPLICATE KEY UPDATE → updates existing row if primary key or unique key conflicts

// $sql = "INSERT INTO users (email, username) VALUES ('john@example.com', 'John') 
//         ON DUPLICATE KEY UPDATE username='John'";
Q:What function is used to execute SQL queries in MySQLi (procedural)?

Answer:
mysqli_query($connection, $query);

Example:

mysqli_query($conn, "INSERT INTO users (name) VALUES ('Rahul')");

$sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";
mysqli_query($conn, $sql);

Q: What is the syntax of the INSERT INTO statement in MySQL?

Answer:

INSERT INTO table_name (column1, column2, column3) VALUES (value1, value2, value3);

What are the two ways to use MySQLi in PHP?

Answer:

Procedural style

Object-Oriented style

Example:

// Procedural
mysqli_query($conn, $sql);

// OOP
$conn->query($sql);

Q: What is SQL injection and how can it affect the INSERT operation?

Answer:
SQL Injection occurs when untrusted user input is directly inserted into SQL queries, allowing attackers to modify or access data.
Example of unsafe code:

$sql = "INSERT INTO users (name) VALUES ('$_POST[name]')";

Q: What is the role of mysqli_connect_error() in insert operations?

Answer:
It returns the error message if the database connection fails.

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


Q: What happens if you insert duplicate values into a unique column?

Answer:
MySQL throws an error:
Duplicate entry 'value' for key 'column_name'

Q: What does $conn->insert_id do?

Answer:
It returns the ID of the last inserted record in an auto-increment column.

mysqli_query($conn, $sql);
echo "Inserted ID: " . mysqli_insert_id($conn);

Q: What happens if you forget to include $_POST method check before insert?

Answer:
Data might be inserted accidentally or multiple times when the page refreshes.
Always use:

if ($_SERVER["REQUEST_METHOD"] == "POST") { ... }


Q: What is the difference between single quotes and double quotes in PHP SQL queries?

Answer:

Single quotes: variables are not parsed

Double quotes: variables are parsed
Example:

$sql = "INSERT INTO users (name) VALUES ('$name')"; // correct

Q: How do you debug insert query errors in PHP?

Answer:
Use:

echo mysqli_error($conn);


Or enable error reporting:

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

