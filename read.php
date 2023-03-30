<?php
require_once("connect.php");

if (isset($_POST)) {
    $email = $_POST['id'];
   $email = $_POST['email'];
   $name = $_POST['name'];
   $message = $_POST['message'];

   $query = "INSERT INTO usa_tranquillero (id, email, name, message) VALUES ('$id','$name', '$email', '$message')";
   $query_run = mysqli_query($connection, $query);

   if ($query_run) {
      echo ("COMMENTED");
      header('Location: index.php');
   } else {
      echo mysqli_error($connection);
   }
}
