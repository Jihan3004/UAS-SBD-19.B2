<?php 
session_start();

unset($_SESSION['username']);
echo "<script> alert('Logout Sukses') </script>";
header('refresh: 1; url=login.php');
?>