<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Fetch Data in PHP</title>
</head>
<body>
<h2>Student Records</h2>
<table border="1" cellpadding="8">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
  </tr>

  <?php
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['phone']}</td>
                </tr>";
      }
  } else {
      echo "<tr><td colspan='4'>No data found</td></tr>";
  }
  ?>
</table>
</body>
</html>
