<?php 

session_start(); 
$_SESSION['jwt_token']='';
session_destroy(); 
header("Location: index.php");
?>