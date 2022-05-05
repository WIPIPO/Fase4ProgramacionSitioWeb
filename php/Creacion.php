<?php
    $severname = "localhost";
    $username = "root";
    $password = "12345678";

    // creamos conexion.
    $conn = new mysqli($severname, $username, $password);

        if ($conn) {
            echo "Conexion exitosa";
            }
            else {
                die("Connection failed: " . mysqli_connect_error());
            }
        
    //Crear BBDD
        $sql = "CREATE DATABASE bdunad12";
        if (mysqli_query($conn,$sql)){
        echo "Database Created succesfully";
        }else
        {
        echo "Error creating database:" . mysqli.error($conn);
        }
        mysqli.close($conn);

 ?>