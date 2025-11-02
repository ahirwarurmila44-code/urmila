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
