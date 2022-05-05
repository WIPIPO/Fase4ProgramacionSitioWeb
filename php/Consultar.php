<!DOCTYPE html>
<html lang="es">
<head>
  <title>Insertar</title>
    <title>Insertar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>



<?php

require('configCon.php');

$id = $_POST['Codigo'];

 
$sql = "SELECT IdProducto, Nombre, Marca, Precio, Cantidad FROM productos  WHERE IdProducto=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { 
?>
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Consulta</h4>
          <button class="close" onclick="location.href='../Consultar.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Codigo: <?php  echo $row['IdProducto']; ?>
        </div>
        <div class="modal-body">
         Nombre: <?php  echo $row['Nombre']; ?>
        </div>
        <div class="modal-body">
         Marca:  <?php  echo $row['Marca']; ?>
        </div>
        <div class="modal-body">
         Precio:  <?php  echo $row['Precio']; ?>
        </div>
        <div class="modal-body">
         Cantidad:  <?php  echo $row['Cantidad']; ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-success" onclick="location.href='../Consultar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>

        
       
       
       <?php
        }
} else {
    ?>
    <div class= "alert alert-danger" role="alert">
        Usuario no encontrado 
    </div>   
        <?php
}

mysqli_close($conn);
?> 