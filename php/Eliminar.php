<!DOCTYPE html>
<html lang="es">
<head>
  <title>Eliminar</title>
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

$cod = $_POST['Codigo'];


$sql = "SELECT * FROM productos WHERE IdProducto=$cod";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

//Eliminar

$sql2 = "DELETE FROM productos WHERE IdProducto=$cod";

if (mysqli_query($conn, $sql2)) {





?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Eliminar dato</h4>
          <button class="close" onclick="location.href='../eliminar.php'">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          Registro eliminado
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../eliminar.php'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php

} else {
?>
<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error Al eliminar</h4>
          <button class="close" onclick="location.href='../eliminar.php'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
           echo "Error eliminando registro: <br> " . mysqli_error($conn);
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../eliminar.php'">Cerrar</button>
        </div>
        
      </div>
    </div>
 <?php


}

    }


} else {

?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error al eliminar el dato</h4>
          <button class="close" onclick="location.href='../eliminar.html'">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
           echo "Esa persona no existe <br> ";
		?>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../eliminar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>
 <?php

}
mysqli_close($conn);
?> 