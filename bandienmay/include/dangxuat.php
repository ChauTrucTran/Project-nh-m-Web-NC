<?php 
session_start();
session_destroy();unset($_SESSION['dangnhap_home']);
header('location:../index.php');
?>