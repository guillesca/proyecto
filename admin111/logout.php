<?php
@session_start();
unset($_SESSION["empleado"]); 
session_destroy();
header("Location: index.php");
?>