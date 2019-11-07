<?php
session_start();
require('functions/functions.php');
$token=$_SESSION['employee_jwt_token'];
$get_details=mysqli_query($con,"update employee set token='' where token='$token';");
$_SESSION['employee_jwt_token']='';
session_destroy(); 
header("Location: index.php");
?>