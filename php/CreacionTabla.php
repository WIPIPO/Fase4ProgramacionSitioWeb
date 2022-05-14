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
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad12";

// Create connection
$conn  = new  mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    ?>
        <div class= "alert alert-danger" role="alert">
            Conexion Exitosa 
        </div> 
        <?php
    }
    else {
        die("Connection failed: " . mysqli_connect_error());
    }
// sql to create table
$sql = "CREATE TABLE Productos (
    IdProducto INT(15) PRIMARY KEY,
    Nombre VARCHAR(15),
    Marca VARCHAR(15),
    Precio INT(50),
    Cantidad INT(10)
    )";
    
    if (mysqli_query($conn, $sql)) {
        ?>
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Creación de la tabla </h4>
                  <button class="close" onclick="location.href='../index.php'">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                 Creacion de la Tabla Exitosa 
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button class="btn btn-danger" onclick="location.href='../index.php'">Cerrar</button>
                </div>
                
              </div>
            </div>
            <?php
    } else {
        echo "Error creando tabla Producto: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    ?>