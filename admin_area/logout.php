<?php
session_start();
require('functions/functions.php');
$token=$_SESSION['admin_jwt_token'];
$get_details=mysqli_query($con,"update customers set token='' where token='$token';");
$_SESSION['admin_jwt_token']='';
session_destroy(); 
header("Location: index.php");
?>