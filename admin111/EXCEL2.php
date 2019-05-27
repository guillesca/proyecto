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

if(!($iden = mysql_connect("localhost", "root", ""))) 
    die("Error: No se pudo conectar");
  
  // Selecciona la base de datos 
  if(!mysql_select_db("codifi", $iden)) 
    die("Error: No existe la base de datos");

$diai=$_POST['bd-desde'];
  $diaf=$_POST['bd-hasta'];
 if(isset($_POST['submit'])){
header('Content-type:text charset-latini');
header("Content-Disposition: attachment; filename=REPORTE111.csv");
$salida=fopen('php://output', 'w');
fputcsv($salida,array('ID','Empleado','telefono','Codificacion','Hora'));
$sentencia = "SELECT * FROM base111 WHERE fecha_at BETWEEN '$diai' AND '$diaf'  ORDER BY id ";
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $iden); 
while ($fila=mysql_fetch_assoc($resultado)){ 
fputcsv($salida, array( 
  $fila['id'],
	$fila['empleado'],
	$fila['telefono'],
	$fila['codi'],
	$fila['fecha_at']));
}
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
   $con='Descarga';
  // Libera la memoria del resultado
$sql="INSERT INTO visita VALUES ('','".$_SESSION["empleado"]."','$actual','$con')";

    if(mysqli_query($conn,$sql));
}
 ?>