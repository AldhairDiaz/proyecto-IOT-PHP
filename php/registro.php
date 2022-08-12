<?php
//Archivo que registra a los usuarios nuevos.

//solicitael archivo conexion.php que contiene el codigo para conectarnos a la MySql

require_once "conexion.php";
$mensaje = "";

//Verifica que las variables esten seteadas o que existan, se recogen los valores con el metodo $_POST
if (isset($_POST['nombre_r']) && isset($_POST['correo_r']) && isset($_POST['password_r'])) {
 //Se crean la variables para una manipulacion mas rapida
 
 $nombre_r = $_POST['nombre_r'];
 $correo_r = $_POST['correo_r'];
 $password_r = $_POST['password_r'];

 $consulta = "SELECT nombre,email FROM `usuarios` WHERE nombre='$nombre_r' OR email='$correo_r'";
 $query_buscar = mysqli_query($conexion_BD, $consulta);
 
 

 //El trabajo del while es corroborar la consulta con un recorrido. si hay usuario con nombre o correo igual
 while ($resultado = mysqli_fetch_array($query_buscar, MYSQLI_ASSOC)) {
     echo 'entra a while';
  if ($nombre_r == $resultado['nombre']) {
   $mensaje = ("<script >alert('Nombre de usuario ocupado');setTimeout(location.href='../index.html#registro');</script>");
   echo $mensaje;
   // header("location:../index.php");

  } elseif ($correo_r == $resultado['email']) {
   $mensaje = ("<script >alert('direccion de correo ocupado');setTimeout(location.href='../index.html#registro');</script>");
   echo $mensaje;

  }
  die();

 }
 //libera el query de la consulta
 mysqli_free_result($query_buscar);

 //Registra un nuevo usuario
 
 $consulta_insert = "INSERT INTO `usuarios` (`id`,`nombre`,`email`,`password`) VALUES (NULL,'$nombre_r','$correo_r','$password_r')";
 $query_insert = mysqli_query($conexion_BD, $consulta_insert);
 if ($query_insert == true) {
  $mensaje = ("<script >alert('Usuario Registrado con éxito.Inicie sesion porfavor.');</script>" . "<script >setTimeout(location.href='../index.html#login');</script>");
    
 } else {
  $mensaje = "Error al crear usuario";

 }
 

}
echo mysqli_error($conexion_BD);

echo $mensaje;