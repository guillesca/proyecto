
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
<nav>
  <center>
 </form>
 <input type="submit" value="Alta Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='empleado2.php'"/>

<input type="submit" value="Alta Supervisor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='adminrg2.php'"/>

 <input type="submit" value="Alta Masivo" class="btn btn-primary" style="border-radius: 30px" onclick = "location='carg.php'"/>

 <input type="submit" value="Baja  Masiva" class="btn btn-primary" style="border-radius: 30px" onclick = "location='elimi.php'"/>

<input type="submit" value="Descargar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='foo2.php'"/>
<input type="submit" value="Actualizacion de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='actu.php'"/>
<input type="submit" value="Consulta de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='consulta.php'"/>
<a href="logout.php">Cerrar Sesión</a>

</form>
 </center>
</nav>
<hr  width=100% size=10 color="#0B173B">
<center>
<h1>Consulta de Asesor.</h1>
</center>
<br>
 <form  method="post" action="">
  <center>
       <label for="empleado">
      <input type="text" id="empleado" name="Empleado" placeholder="#Empleado" class="form-control"  style="border-radius: 30px"  >  </label>
    <input class="btn btn-primary"  name="submit" type="submit" style="border-radius:  30px" value="Buscar" />
 </form>
  </center>
  <hr  width=100% size=10 color="#0B173B">
<?php 
  // Se conecta al SGBD 
if (isset($_POST["submit"])) {
  if(!($iden = mysqli_connect("localhost", "admin", "admin"))) 
    die("Error: No se pudo conectar");
  // Selecciona la base de datos 
  if(!mysqli_select_db("xxcbx_usuarios", $iden)) 
    die("Error: No existe la base de datos");
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
 $sentencia = "SELECT * FROM xxcbx_usuarios WHERE empleado='".$_POST['xxcbx_iduser']."' ORDER BY id ";
  // Ejecuta la sentencia SQL 
  $resultado = mysqli_query($sentencia, $iden); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");
  echo "<center>";
    echo '<table border="1">'; 
  echo'<td bgcolor="#0BB8EB"><strong>Id</strong></td>
  <td bgcolor="#0BB8EB"><strong>#Empleado</strong></td>
  <td bgcolor="#0BB8EB"><strong>Contraseña</strong></td>
    <td bgcolor="#0BB8EB"><strong>Nombre</strong></td>
    <td bgcolor="#0BB8EB"><strong>Fecha de Alta</strong></td>
    <td bgcolor="#0BB8EB"><strong>Fecha de Vencimiento</strong></td>';
  
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
    echo '<tr>'; 
    echo '<td>' . $fila['id'] . '</td>
    <td>' . $fila['empleado'] . '</td>
    <td>'. $fila['pass'] . '</td>
    <td>'. $fila['nombre'] . '</td>
    <td>'. $fila['fecha_at'] . '</td>
    <td>'. $fila['fecha_ve'] . '</td>';
    echo '</tr>'; 
  } 
  echo '</table>';
  echo "</center>";
  // Libera la memoria del resultado
  mysqli_free_result($resultado);
  // Cierra la conexión con la base de datos 
  mysqli_close($iden); 
}
?>
<center>
  <p>
    <br>
    <input type="submit" value="regresar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='javascript:history.back(-1);'"/>
  </center>
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>