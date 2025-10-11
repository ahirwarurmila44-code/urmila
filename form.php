<?php

if(isset($_POST['submit'])){
    echo "Form submitted ..... ";

    $name = $_POST['name'];
    echo $name ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3>Form Submit In PHP</h3>

<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>