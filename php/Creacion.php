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
    $severname = "localhost";
    $username = "root";
    $password = "12345678";

    // creamos conexion.
    $conn = new mysqli($severname, $username, $password);

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

            
            
    //Crear BBDD
        
    // para saber si ya existe la BD
    $sqlExistBD= "SELECT IF(EXISTS( SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'bdunad12'), 'Yes', 'No') as exist;";

    $exist=mysqli_query($conn,$sqlExistBD);
    $sql = "CREATE DATABASE IF NOT EXISTS bdunad12";



        if (mysqli_query($conn,$sql)){

       
          if(mysqli_num_rows($exist) > 0){

        
            ?>

                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Información </h4>
                      <button class="close" onclick="location.href='../index.php'">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    La base de datos bdunad12 ya existe! 
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-danger" onclick="location.href='../index.php'">Cerrar</button>
                    </div>
                    
                    </div>
                 </div>

            <?php

          } else{
          
            ?>
             <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Creación de la base de datos </h4>
                      <button class="close" onclick="location.href='../index.php'">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    Creacion de la base de datos Exitosa 
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-danger" onclick="location.href='../index.php'">Cerrar</button>
                    </div>
                    
                  </div>
            </div>
            
          <?php
        }


      }
        
        else
        {
        echo "Error creating database: " . mysqli.error($conn);

    


        }
        mysqli_close($conn);

 ?>