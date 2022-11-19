<?php



session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}


include '../components/navbar/header2.php';
echo "Welcome " .$_SESSION['username'];
?>