<?php
include 'datos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
    <title>Datos del sensor</title>
</head>
<body style="background-color: #e3f2fd;">

<div class="mx-auto w-75 p-3">
        <h1>Bienvenido  </h1>
        </div>

    <div class="w-75 p-3 mx-auto">
        

       

        <nav class="navbar navbar-dark bg-primary  "> 
        
            <button class="btn btn-success float-left" type="button" data-toggle="collapse" data-target="#tablaActual" aria-controls="tablaActual" aria-expanded="false" >
             Registro actual
            </button>
            <p><h3> Tablas de datos del sensor</h3></p>
            <button class="btn btn-success float-right" type="button" data-toggle="collapse" data-target="#tablaGeneral" aria-controls="tablaGeneral" aria-expanded="false" >
            Registro General
            </button>
        
    </nav>

    <table class="table collapse multi-collapse border border-secondary shadow p-3 mb-5 bg-white rounded" id="tablaGeneral" border="1">
    <thead class="thead-dark">
    <tr>
    <th>Fecha</th>
    <th>Temperatura ºC</th>
    <th>Humedad %</th></tr>
    </thead>

        <?php
include 'recolectar datos.php';
?>

        </table  >

        <table class="table collapse multi-collapse border border-primary shadow p-3 mb-5 bg-white rounded" id="tablaActual" border="1">

        <thead class="thead-dark">
    <tr>
    <th>Fecha</th>
    <th>Temperatura ºC</th>
    <th>Humedad %</th></tr>
    </thead>

        <?php
include 'registrosdatos.php';
?>

        </table>

    </div>
  


</body>
</html>