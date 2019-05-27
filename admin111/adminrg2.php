
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
        <img src="imagenes/LOGO_MR_AZUL.gif" cl  width="200" height="150" ALT="logo">
         <br>        
<input type="submit" value="Alta Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='empleado2.php'"/>

 <input type="submit" value="Alta Masivo" class="btn btn-primary" style="border-radius: 30px" onclick = "location='carg.php'"/>

 <input type="submit" value="Baja  Masiva" class="btn btn-primary" style="border-radius: 30px" onclick = "location='elimi.php'"/>

<input type="submit" value="Descargar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='foo2.php'"/>
<input type="submit" value="Actualizacion de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='actu.php'"/>
<input type="submit" value="Consulta de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='consulta.php'"/>
<a href="logout.php">Cerrar Sesión</a>
 </center>

  <form action="" method="POST">
  <center>
    <hr  width=100% size=10 color="#0B173B">
  <h2 class="text-danger"><em>Registro Supervisor</em></h2>  
   
     <p> <label for="empleado">Numero de Empleado: <span><em>(requerido)</em></span></label>
      <input type="text" name="USUARIO" id="USUARIO" style="border-radius: 30px"  class="form-control" pattern="[0-9]{3,10,''}"  placeholder="Empleado" required/>  
    
  
   <p> <label for="nombre">Nombre: <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" style="border-radius: 30px"  class="form-control" pattern="[A-Za-z]{3,10}"  placeholder="Nombre" required/>  
    
    <label for="password">Contraseña: <span><em>(requerido)</em></span></label>
      <input type="text" name="pass" style="border-radius: 30px"  class="form-control"   placeholder="Password" required/>  

      <label for="date">Fecha de Vencimiento: <span><em>(requerido)</em></span></label>
      <input type="date" name="fecha_ve" style="border-radius: 30px"  class="form-control"   placeholder="Fecha de vencimiento" required/>  
    
      
     <center><p> <br> <input class="btn btn-primary" style="border-radius: 30px"   name="submit" type="submit" value="Enviar" />
      <input type="submit" value="regresar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='javascript:history.back(-1);'"/>

     </center>
   <?php
if(isset($_POST["submit"]))
{
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


    $sql2="INSERT INTO alta VALUES ('','".$_SESSION['empleado']."','".$_POST["USUARIO"]."','$actual')";


   if(mysqli_query($conn,$sql2));
   
    $sql="INSERT INTO admin2 VALUES ('','".$_POST["USUARIO"]."','".$_POST["nombre"]."','".$_POST["pass"]."','$actual','".$_POST["fecha_ve"]."')";


    
    if(mysqli_query($conn,$sql)){
    echo '<script language ="javascript"> alert ("Guardado con exito") </script>' ;
    }
    else{
        echo "error :".$sql."".mysqli_error($conn);
    }
    $conn->close();
}
?>
    
  </form>
  </div>
   

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</HTML>
