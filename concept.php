<?php

Encapsulation in php oop ?

"How to protect your data in PHP classes"

class Bank {
  private $pin = 1234;
  function showPin(){echo $this->pin;}
}


💬 Explain:
Using private hides data from outside — that’s encapsulation!





"Simple but powerful! Follow for more PHP interview boosters!"




















Static Methods

🎥 Hook:
"Why use static methods in PHP?"

💻 Code:

class Math {
  static function add($a,$b){ return $a+$b; }
}
echo Math::add(2,3);


💬 Explain:
Static methods belong to the class — no need to create an object.




Q: What is explode() in PHP?

Splits a string into an array.

$str = "one,two,three";
$arr = explode(",", $str);














What is implode() in PHP?

Joins array elements into a string.

Syntax
implode(string $separator, array $array): string

Example 1:
$arr = ["PHP", "MySQL"];
echo implode("-", $arr);

Example 2:
$fruits = ["apple", "banana", "grape"];
$string = implode(", ", $fruits);

Output 1:
PHP-MySQL

Output 2:
apple, banana, grape













What is difference between indexed and associative array?

Indexed → numeric keys

Associative → named keys

$names = ["Ram", "Shyam"];
$user = ["name" => "Coder", "age" => 25];




What is a loop in PHP?

Repeats a block of code.

for ($i = 1; $i <= 3; $i++) {
  echo $i;
}






What is array_merge()?

Combines multiple arrays into one.

$a = [1,2];
$b = [3,4];
print_r(array_merge($a,$b));






What is the difference between UNION and UNION ALL?

UNION → removes duplicates

UNION ALL → includes duplicates



What is the difference between IS NULL and = NULL?

You must use IS NULL to check null values:

SELECT * FROM users WHERE email IS NULL;

What is the difference between WHERE and HAVING?

WHERE → filters rows before grouping

HAVING → filters rows after grouping




What is ternary operator in PHP?
Shortcut for if-else →

$result = ($age >= 18) ? "Adult" : "Minor";


How to define a function in PHP?

function greet() {
   echo "Hello!";
}



How to check if a form is submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Form submitted!";
}




11. What is enctype="multipart/form-data"?

Required for uploading files through a form.




How to check if a file is uploaded successfully?
if ($_FILES['photo']['error'] == 0) {
  echo "Uploaded!";
}




14. How to retain form values after submission?
<input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>">


15. What is form action attribute?

Specifies the PHP file that will handle the submitted data.


17. How to prevent form resubmission on refresh?

Use redirect after processing:

header("Location: thankyou.php");
exit;


19. How to handle multiple checkboxes?
$hobbies = $_POST['hobbies'];
foreach($hobbies as $hobby){
  echo $hobby . "<br>";
}

21. What is an array in PHP?

Stores multiple values in one variable.

$colors = ["Red", "Green", "Blue"];




34. How to iterate through an array?
foreach($colors as $color){
  echo $color;
}




35. Difference between array_merge() and array_combine()

array_merge() joins arrays

array_combine() creates a new array using one for keys and another for values


38. What are parameters and arguments?

Parameter: defined in function

Argument: value passed when calling




42. What is a recursive function?

Function that calls itself.

function fact($n){
  if($n==1) return 1;
  return $n * fact($n-1);
}







// important tags for all videos
//  php, php tutorial, php shorts, php for beginners, php programming, web development, php interview, php oops, php projects, php database
