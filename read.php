<?php
require_once("connect.php");

if (isset($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $query = "INSERT INTO message (name, email, message) VALUES ('$name', '$email', '$message')";
   $query_run = mysqli_query($connection, $query);

   if ($query_run) {
      echo ("COMMENTED");
      header('Location: index.php');
   } else {
      echo mysqli_error($connection);
   }
}
