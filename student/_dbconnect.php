<?php
$server="localhost";
$username="root";
$password="";
<<<<<<< HEAD
$databse="users";
=======
$databse="users_db";
>>>>>>> 4652bcab6fe0d31659aae006436002e07e90ce84

$conn=mysqli_connect($server, $username, $password, $databse);
if (!$conn){
    die("Error ". mysqli_connect_error());
}
<<<<<<< HEAD

=======
else{
    echo "The connnection was made"; 
}
>>>>>>> 4652bcab6fe0d31659aae006436002e07e90ce84
?>