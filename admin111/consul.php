<?php
error_reporting(0);
session_start(); 
$_SESSION["empleado"]=$_POST['empleado'];
$_SESSION["PASS"]=$_POST['password'];
// 1. Create a database connection
$connection = mysqli_connect('localhost',$_SESSION["empleado"],$_SESSION["PASS"]);
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// 2. Select a database to use
$db_select = mysqli_select_db($connection,'table_mstr');
header('Location:  muestra.php');
if (!$db_select) {
    die("Fallo el inicio de sesion intentelo nuevamente: " . mysqli_error($connection));
}
?>