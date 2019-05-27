<?php

if(isset($_POST["submit"])){
$usar=$_POST['USUARIO'];
require("connecti.php");
$sql2=mysqli_query($connection,"SELECT * FROM xxcbx_usuarios WHERE xxcbx_iduser='$usar'");
if($f2=mysqli_fetch_array($sql2)){
   $usuario=$f2['xxcbx_iduser'];
   $nombre=$f2['xxcbx_nombre'];
   $password=$f2['xxcbx_password'];



}
}
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
                  </center>
  <form action="actual.php" method="POST">
  <center>
  <h2 class="text-danger"><em>Registro de Asesor</em></h2>
  <hr  width=100% size=10 color="#0B173B">
     <p> <label for="empleado">Numero de Empleado: <span><em>(requerido)</em></span></label>
      <input type="text" name="USUARIO" style="border-radius: 30px"  class="form-control" value="<?php echo $usuario; ?>"  placeholder="Empleado" required/>


   <p> <label for="nombre">Nombre: <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" style="border-radius: 30px"  class="form-control" value="<?php echo $nombre; ?>"  placeholder="Nombre" required/>

    <label for="password">Contraseña: <span><em>(requerido)</em></span></label>
      <input type="text" name="password" style="border-radius: 30px"  class="form-control"  value="<?php echo $password; ?>" placeholder="Password"  required/>




     <center><p> <br> <input class="btn btn-primary" style="border-radius: 30px;width: 70px"   name="submit" type="submit" value="Enviar" />

 <p>
</form>

  </p>

     <input type="submit" value="regresar" class="btn btn-primary" style="border-radius: 30px" onclick = "location='/Codificacion/111/admin111/index.php'"/>
</center>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</HTML>
