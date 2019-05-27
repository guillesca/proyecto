<?php
if(isset($_POST["submit"])){

$usar=$_POST['USUARIO'];
$pass=$_POST['password'];
$nombre=$_POST['nombre'];

require("connecti.php");

echo $usar;
echo $pass;
echo $nombre;


$sql="UPDATE xxcbx_usuarios
      SET xxcbx_iduser='$usar', xxcbx_password='$pass', xxcbx_nombre='$nombre'
      WHERE xxcbx_iduser ='$usar' ";

    if(mysqli_query($connection,$sql)){

    echo '<script language ="javascript"> alert ("Sea Modificado el Usuario") </script>' ;
    header('Location: actu.php');

$connection->close();
    }

}

?>
