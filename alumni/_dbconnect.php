<?php
$server="localhost";
$username="root";
$password="";
$databse="users_db";

$conn=mysqli_connect($server, $username, $password, $databse);
if (!$conn){
    die("Error ". mysqli_connect_error());
}
else{
    // echo "The connnection was made"; 
}
?>