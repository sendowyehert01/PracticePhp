<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'inventory');
  if (!$connection){
    die('Connection Failed');
  }
?>