 <!--validacion para inicio de codificacion-->
 <?php
 session_start();
require("connect.php");
$usar=$_GET['empleado'];
$pass=$_GET['password'];
$permitidos = 3;
$tiempo = 360; //3600 segundos
// PRIMERO VERIFICAMOS S PUEDE SEGUIR LOGUEANDOSE O DEBE ESPERAR ALGUN TIEMPO
if(isset($_SESSION['tiempo_fuera'])) {
// Comprobamos cuanto tiempo ha pasado:
$tiempo_ahora = time() - $_SESSION['tiempo_fuera'];
if($tiempo_ahora < $tiempo) {
$tiempo_restante = $tiempo-$tiempo_ahora;
// ESTO SI NO PUEDE LOGUEARSE
die('Debes esperar '.$tiempo_restante.' segundos para poder intentar el login de nuevo.<br /><br /><a href="index.php">Recargar página</a>');
} else {
unset($_SESSION['tiempo_fuera']);
}
}
if($_SERVER['REQUEST_METHOD'] == "GET") {
// ESTO ES TODO LO QUE SE HARA AL ENVIAR EL FORMULARIO
// LUEGO VEMOS CUANTOS INTENTOS VA
if(!isset($_SESSION['intentos'])) {
$intento = 0;
$_SESSION['intentos'] = $intento;
} else {
$intento = $_SESSION['intentos'];
}
// LUEGO COMPARAMOS CON EL NUMERO DE INTENTOS PERMITIDOS

if($intento >= $permitidos) {
// LO QUE PASARA SI HA SOBREPASADO EL NUMERO DE INTENTOS VALIDOS
unset($_SESSION['intentos']);
$_SESSION['tiempo_fuera'] = time();
die('Ha sobrepasado el numero permitido de intentos de login. No podra loguearse por '.$tiempo.' segundos.<br /><br /><a href="inicio.php">Recargar página</a>');
} else {
// CONTABILIZAMOS EL INTENTO
$intento++;
//
date_default_timezone_set('America/Monterrey');
  $actual = date("Y-m-d");


 $sql2=mysqli_query($connection,"SELECT * FROM xxcbx_usuarios WHERE xxcbx_iduser='$usar'");
if($f2=mysqli_fetch_array($sql2)){
	if($pass==$f2['xxcbx_password']){
		$_SESSION['empleado']=$f2['xxcbx_idusers'];

			$acceso =1;

   }

 }
 else {
$acceso =0;
}

if($acceso == 1) {
// BORRAMOS LAS VARIABLES DE SESION
unset($_SESSION['tiempo_fuera'],$_SESSION['intentos']);
// AQUI REDIRIGES O LO QUE SEA Q HAYA Q HACER SI EL LOGIN ES CORECTO
	header('Location:  muestra.php');
}

else {
// GUARDAMOS EL INTENTO Y REGRESAMOS AL LOGIN
$_SESSION['intentos'] = $intento;
echo 'datos incorrectos, vas '.$intento.' intentos <br />';
}
}
}
 if($acceso == 0){

header('Location: index.php');
}
?>
