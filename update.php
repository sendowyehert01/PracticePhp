<?php
include "db.php";
include "functions.php";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];
  
  $query = "INSERT INTO information(username, password)";
  $query .= "VALUES ('$username', '$password')";
  
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die('Query Failed!' . mysqli_error());
  } else {
    echo "A user is Updated!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <form action="/practice/create.php" method="post">
    <input type="text" name="username" placeholder="Enter username"><br>
    <input type="text" name="password" placeholder="Enter Password"><br>
    <select name="" id="">
      <?php 
      showAllData();
      ?>
    </select><br>
    <button type="submit" name="submit">SUBMIT</button>
  </form>
  
</body>
</html>