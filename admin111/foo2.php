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

 <input type="submit" value="Baja  Masiva" class="btn btn-primary" style="border-radius: 30px" onclick = "location='elimi.php'"/>


<input type="submit" value="Actualizacion de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='actu.php'"/>
<input type="submit" value="Consulta de Asesor" class="btn btn-primary" style="border-radius: 30px" onclick = "location='consulta.php'"/>

<a href="logout.php">Cerrar Sesión</a>
 
 
</center>
<hr  width=100% size=10 color="#0B173B">
 <form  method="post" action="EXCEL2.php">
  <center>
    <H1>Descarga de Codificacion.</H1><br>
       <label for="dia">
      <input type="date" id="bd-desde" name="bd-desde"  class="form-control"  style="border-radius: 30px"  >  </label>
      <label for="dia">
      <input type="date" id="bd-hasta" name="bd-hasta"  class="form-control"  style="border-radius: 30px">  </label>

    <input class="btn btn-primary"  name="submit" type="submit" style="border-radius:  30px" value="EXPORTAR" />


  </center>
  <hr  width=100% size=10 color="#0B173B">

<center>
</form>
  <p>
    <br>
   <form action="javascript:history.back(-1);">
    <input type="submit" class="btn btn-primary"  style="border-radius: 30px" value="Regresar" />
</form>
  </center>
 
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
    
