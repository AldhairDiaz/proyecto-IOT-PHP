<?php
require_once "conexion.php";

if (isset($_POST['correo_l']) && isset($_POST['password_l'])) {
    $mensaje="entro a la conex";

 $correo_l = $_POST['correo_l'];
 $password_l = $_POST['password_l'];

 $consulta = "SELECT `email`,`password` FROM `usuarios` WHERE  `email`='$correo_l' AND `password`='$password_l' ";
 $query_buscar = mysqli_query($conexion_BD, $consulta);
 if ($resultado = mysqli_fetch_array($query_buscar, MYSQLI_ASSOC)) {
     
  
  header('location:../php/administrar.php');
 } else {

 $mensaje = ("<script >alert('Datos erroneos.');</script><script >setTimeout(location.href='../index.html');</script>");

 }
 
 echo $mensaje;

}
echo mysqli_error($conexion_BD);

?>
