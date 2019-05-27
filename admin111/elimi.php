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
?>
<?xml version="1.0" encoding="iso-8859-1"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict> 
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="icon" type="image/jpeg" href="imagenes/SYTECico.jpg" />
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/jpeg" href="imagenes/SYTECico.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Reporte 111.</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" medi="screen"> 
</head> 
<body>
    <style type="text/css"> 
body{
background-image: url(imagenes/fondo5.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: ;
}

</style>
  <center>
<h2><em>Codificacion 111</em></h2> 
</center>

  <center>
 
<input type="submit" value="Alta Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='empleado2.php'"/>

<input type="submit" value="Alta Supervisor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='adminrg2.php'"/>

 <input type="submit" value="Alta Masivo" class="btn btn-primary" style="border-radius: 30px" onclick = "location='carg.php'"/>

<input type="submit" value="Descargar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='foo2.php'"/>
<input type="submit" value="Actualizacion de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='actu.php'"/>
<input type="submit" value="Consulta de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='consulta.php'"/>
<a href="logout.php">Cerrar Sesión</a>
 
 
</center>
<hr  width=100% size=10 color="#0B173B">
 <center>
  <h1>Baja Masiva.</h1>
  <br>
 <form action="" method='post' enctype="multipart/form-data">
    Importar Archivo : <input type='file' name='sel_file' size='20'>
   <input type='submit' name='submit' value='submit'>
 </center>



  <hr  width=100% size=10 color="#0B173B">

<center>
</form>
  <p>
  	<table class="egt" border="1">
  		EJEMPLO : 
  		 El formato debe ser ingresado de la siguente manera en un documento .csv
  		 <p>

  <tr>

    <td>1</td>

    <td>1515</td>





  </tr>

  <tr>

    <td>2</td>

    <td>1534</td> 

   

  
  </tr>

</table>
    <br>
   <form action="javascript:history.back(-1);">
    <input type="submit" class="btn btn-primary"  style="border-radius: 30px" value="Regresar" />
</form>
  </center>
 
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
   <?php
//conexiones, conexiones everywhere
ini_set('display_errors', 1);
error_reporting(E_ALL);
$db_host = 'localhost:3306';
$db_user = 'root';
$db_pass = '';
 
$database = 'codifi';
$table = 'empleados';
date_default_timezone_set('America/Monterrey');
  $actual = date("Y-m-d H:i:s");
if (!@mysql_connect($db_host, $db_user, $db_pass))
    die("No se pudo establecer conexión a la base de datos");
 
if (!@mysql_select_db($database))
    die("base de datos no existe");
    if(isset($_POST['submit']))
    {
        //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['sel_file']['name'];
         echo 'Cargando nombre del archivo: '.$fname.' <br>';
         $chk_ext = explode(".",$fname);
 
         if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
             {
               //Insertamos los datos con los valores...
                $sql2= "INSERT INTO bajas (id,super,usua,fecha) VALUES ('','".$_SESSION['empleado']."','$data[1]','$actual')";
             mysql_query($sql2) or die('Error: '.mysql_error());
               //Insertamos los datos con los valores...
               $sql= "DELETE from empleado2 WHERE(empleado='$data[1]')";
              
                mysql_query($sql) or die('Error: '.mysql_error());
        
           }
            
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
             echo "Importación exitosa!";
         }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
//ver si esta separado por " , "
             echo "Archivo invalido!";
         }
    }
 
?>
 
