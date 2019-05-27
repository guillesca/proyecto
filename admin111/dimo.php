<?php
session_start(); 
if (isset($_POST['empleado'])) 
{
  $_SESSION['empleado'] = $_POST['empleado']; //Nickname Grabado
}
if ($_SESSION['empleado']) //Si hay un nickname en la sesion actual, creamos una variable que será mostrada
{
  $grabado="El valor Grabado Previamente es: <strong>".$_SESSION['empleado']."</strong><br />";
} 

 if(isset($_POST['USUARIO'])){
 	

  if(!($iden = mysql_connect("localhost", "root", ""))) 
    die("Error: No se pudo conectar");
  
  // Selecciona la base de datos 
  if(!mysql_select_db("codifi", $iden)) 
    die("Error: No existe la base de datos");
 $id=$_POST['USUARIO'];
 $consul="DELETE FROM empleado2 WHERE empleado=$id";
             $server="localhost:3306";
    $user="root";
    $pass="";
    $db="codifi";
  date_default_timezone_set('America/Monterrey');
  $actual = date("Y-m-d H:i:s");
    $conn= new mysqli($server,$user,$pass,$db);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }

  // Libera la memoria del resultado

 $resul=mysql_query($consul, $iden) or die (mysql_error());
header("location: datos.php");
 }
 echo "Numero Incorrecto.";
 ?>