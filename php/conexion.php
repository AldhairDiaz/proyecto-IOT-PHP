<?php

$nombre_BD="iot";
//$tabla="usuarios";
$servidor="34.122.37.56";
//$servidor="127.0.0.1";
$password="aldhair";
$usuario="root";

$conexion_BD=@mysqli_connect($servidor,$usuario,$password,$nombre_BD);
if(!$conexion_BD){
    die("imposible conectarse: ".mysqli_connect_error());
}





?>