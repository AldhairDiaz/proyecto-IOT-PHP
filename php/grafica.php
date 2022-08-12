<?php
require_once "conexion.php";


$data = array();

$consulta_mostrar = "SELECT * FROM `datos`";

$query_mostrar = mysqli_query($conexion_BD, $consulta_mostrar);



while ($resultado = mysqli_fetch_array($query_mostrar, MYSQLI_ASSOC)) {

 $data[] = $resultado;

}


?>

