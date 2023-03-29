<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'read_db');


if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $query = "INSERT INTO jenamel (`email`,`name`,`message`) VALUES ('$email','$name','$message')";
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run)
    {
        echo '<script> alert ("COMMENTED"); </script>';
        header('Location: index.php');
    }
    else{echo '<script> alert("ERROR"); </script>';
    
    }

}



?>