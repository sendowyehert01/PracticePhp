<?php
include "db.php";
  
  $query = "SELECT * FROM information";
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die('Query Failed!' . mysqli_error());
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

<?php 
 while($row = mysqli_fetch_assoc($result)) {
?>
    <pre>
    <?php
   print_r($row);
     ?>
    </pre>
<?php 
}
?>
  
</body>
</html>