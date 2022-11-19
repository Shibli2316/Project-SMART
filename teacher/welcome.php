<?php
session_start();
include '../components/nav.php';
echo "Welcome " .$_SESSION['username'];
?>