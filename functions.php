<?php 
include "db.php";

function showID() {
global $connection;
$query = "SELECT * FROM information";
$result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed!' . mysqli_error($connection));
  }
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function createData() {
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = "INSERT INTO information(username, password)";
  $query .= "VALUES ('$username', '$password')";
  
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die('Query Failed!' . mysqli_error($connection));
  } else {
    echo "A user is Registered!";
  }
}

function updateData() {
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];
  
  $query = "UPDATE information SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id ";
  
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die('Query Failed!' . mysqli_error($connection));
  } else {  
    echo "A user is Updated!";
  }
}
?>