<?php
session_start();
include '../components/navcheck.php';
echo "Welcome " .$_SESSION['username'];
?>