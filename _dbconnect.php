<?php
$server = "localhost";
$name = "root";
$number = ;
$email = ;
$database = "submission1998";
$conn = mysql_connect($server, $name, $number, $email, $database);
if(!$conn){
//     echo "success";
// }
// else{
    die("Error", mysqli_connect_error());
}
?>