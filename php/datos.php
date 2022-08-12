<?php
require_once "conexion.php";
echo"FF";
//Ingresar datos del sensor a MySql
if (isset($_GET['temperatura']) && isset($_GET['humedad'])) {
 $temperatura = $_GET['temperatura'];
 $humedad = $_GET['humedad'];

 $consulta_insert = "INSERT INTO `datosdht` (`id`,`fecha`,`temperatura`,`humedad`) VALUES ('NULL',CURRENT_TIMESTAMP,'$temperatura','$humedad')";
 //echo "$consulta_insert";
 $query_insert = mysqli_query($conexion_BD, $consulta_insert);

 if ($query_insert == true) {
  $mensaje = "Exito al cargar datos";

 } else {
  $mensaje = "Error al guardar";

 }

 
 //Recorrer los datos de MySql


}
