<?php

require_once "conexion.php";
 $consulta_mostrar = "SELECT fecha,temperatura,humedad FROM `datos`";
 $query_mostrar = mysqli_query($conexion_BD, $consulta_mostrar);
 
 while ( $resultado= mysqli_fetch_array($query_mostrar, MYSQLI_ASSOC)) {
    
  echo "<tr ><td>" . $resultado['fecha'] . "</td>";
  echo "<td>" . $resultado['temperatura'] . " ºC" . "</td>";
  echo "<td>" . $resultado['humedad'] . " %" . "</td></tr>";
 }




?>