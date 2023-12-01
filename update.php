<?php
include "db.php";
include "functions.php";

if (isset($_POST['submit'])) {
  updateData();
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
  
  <form action="update.php" method="post">
    <input type="text" name="username" placeholder="Enter username"><br>
    <input type="text" name="password" placeholder="Enter Password"><br>
    <select name="id" id="id">
      <?php 
      showID();
      ?>
    </select><br>
    <button type="submit" name="submit">SUBMIT</button>
  </form>
  
</body>
</html>