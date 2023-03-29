<?php
$connection = mysqli_connect("localhost", "root", "3306", "tranquillero_jenamel");

if(!$connection){
    die("Error" . mysqli_connect_error());

}
else
echo 'connection established';


?>