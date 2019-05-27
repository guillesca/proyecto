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

 if(isset($_POST['USUARIO'])){


 require("connect.php");

 $consul="DELETE FROM xxcbx_usuarios WHERE xxcbx_iduser='".$_POST['USUARIO']."'";
             // Libera la memoria del resultado


    if(mysqli_query($connection,$consul)){


    echo '<script language ="javascript"> alert ("exito") </script>' ;
    header('Location: actu.php');



    $connection->close();
       }
   }
 ?>
