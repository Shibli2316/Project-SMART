<?php



session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


include '../components/navbar/header2.html';
echo "Welcome " .$_SESSION['username'];
?>