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
