<?php

session_start();
header('location: login.php');
include '_dbconnect.php';

$username = $_POST['username'];
$pass = $_POST['password'];
$year = $_POST['year'];

$sql = "SELECT * FROM alumni WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "Username Exists";
} else{
    $reg = "INSERT INTO alumni (username, password, year) VALUES ('$username', '$pass', '$year')";
    mysqli_query($conn, $reg);
    echo "Registered";
}
?>