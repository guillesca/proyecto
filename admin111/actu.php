<?php
session_start(); 
if (isset($_POST['empleado'])) 
{
  $_SESSION['empleado'] = $_POST['empleado']; //Nickname Grabado
}
if ($_SESSION['empleado']) //Si hay un nickname en la sesion actual, creamos una variable que será mostrada
{
  $grabado="El valor Grabado Previamente es: <strong>".$_SESSION['empleado']."</strong><br />";
} ?>
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

</center>

  <center>
<input type="submit" value="Alta Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='empleado2.php'"/>





 



<a href="logout.php">Cerrar Sesión</a>



</center>
<hr  width=100% size=10 color="#0B173B">
<div id="busqueda">
 <form  method="post" action="eli.php">
  <center>
   <h1>Actualizacion de Asesor.</h1> 
   <br>
       <label for="empleado">Usuario: <span><em>(requerido)</em></span></label> </font> 
 <br>
      <input type="text" id="USUARIO" name="USUARIO"  placeholder="#Empleado" class="form-control"  style="border-radius: 30px;width: 190px"">  </label>
<br>
    <input class="btn btn-primary"  name="submit" type="submit"  style="border-radius:  30px" value="Baja de Usuario" />
 
  </div>
  
 </form>
 <form method="post" action="datos.php">
 

   <center>

  <label for="empleado">Usuario: <span><em>(requerido)</em></span></label> </font> 
      <input type="text" id="USUARIO" name="USUARIO"  class="form-control"  style="border-radius: 30px;width: 190px" placeholder="Empleado" required/>  
    </p></label>
    <input class="btn btn-primary"  name="submit" type="submit"  style="border-radius:  30px" value="modificar" />

   </center>
 </form>
<center> 
 <hr  width=100% size=10 color="#0B173B">
	<p>
		<br>
   <input type="submit" value="regresar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='javascript:history.back(-1);'"/>
  </center>
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>