<?php
$server = "localhost";
$name = "root";
$number = "";
$email = "";
$address = "";
$database = "submission1998";
$conn = mysqli_connect($server, $name, $number, $email, $database);
if(!$conn){
//     echo "success";
// }
// else{
    die( "Error". mysqli_connect_error());
}
?>