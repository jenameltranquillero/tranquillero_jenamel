<?php
require_once("conts.php");

if (isset($_POST['editdata'])) {
   $username = $_POST['edit'];

   $email = $_POST['email'];
   $username = $_POST['name'];
   $messages = $_POST['messages'];

   $query = "UPDATE usa_tranquillero SET email='$email', name='$name', messages=' $messages' WHERE email='$email'  ";
   $query_run = mysqli_query($conn, $query);

   if ($query_run) {
      echo '<script> alert("Data Updated"); </script>';
      header("Location:messages.php");
   } else {
      echo '<script> alert("Data Not Updated"); </script>';
   }
}
?>
