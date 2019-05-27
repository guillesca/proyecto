<?php
error_reporting(0);
session_start();
if (isset($_POST['empleado']))
{
  $_SESSION['empleado'] = $_POST['empleado']; //Nickname Grabado
}
if ($_SESSION['empleado']) //Si hay un nickname en la sesion actual, creamos una variable que será mostrada
{
  $grabado="El valor Grabado Previamente es: <strong>".$_SESSION['empleado']."</strong><br />";
}
/*
if(!defined("_access")) {
  die("Error: No tienes permiso para acceder aqu&iacute;...");
}*/
?>
<HTML>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/jpeg" href="imagenes/SYTECico.jpg" />

<!--<link href="estilos.css" rel="stylesheet" type="text/css"> -->


<title>Codificacion</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" medi="screen">
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

</head>
<body >
      <div class="container">
        <center>
     
                  </center>


  <center>



<input type="submit" value="Actualizacion de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='actu.php'"/>
<input type="submit" value="Consulta de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='consulta.php'"/>

<a href="logout.php">Cerrar Sesión</a>
  <hr  width=100% size=10 color="#0B173B">
 <form action="" method="POST">
  <h2 class="text-danger"><em>Registro de Asesor</em></h2>

     <p> <label for="empleado">Usuario: <span><em>(requerido)</em></span></label>
      <input type="text" name="USUARIO" style="border-radius: 30px"  class="form-control"   placeholder="Usuario" required/>


   <p> <label for="nombre">Nombre: <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" style="border-radius: 30px"  class="form-control"   placeholder="Nombre" required/>

    <label for="password">Contraseña: <span><em>(requerido)</em></span></label>
      <input type="password" name="password" style="border-radius: 30px"  class="form-control"   placeholder="Password"  required/>




     <center><p> <br> <input class="btn btn-primary" style="border-radius: 30px;width: 70px"   name="submit" type="submit" value="Enviar" />



      <input type="submit" value="regresar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='javascript:history.back(-1);'"/>
     </center>
   <?php

require("connecti.php");
/*
$sql = "INSERT INTO xxcbx_usuarios (xxcbx_iduser,xxcbx_nombre,xxcbx_password) VALUES ('USUARIO', 'nombre', 'password')";

*/

    $sql="INSERT INTO xxcbx_usuarios (xxcbx_iduser,xxcbx_nombre,xxcbx_password) VALUES('".$_POST['USUARIO']."','".$_POST['nombre']."','".$_POST['password']."')";


    if(mysqli_query($connection,$sql)){


    echo '<script language ="javascript"> alert ("Guardado con exito") </script>' ;



    $connection->close();
}
?>
    </p>
  </form>
  </div>
   <div>
  <center>
  </p>


  </center>
</div>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</HTML>
