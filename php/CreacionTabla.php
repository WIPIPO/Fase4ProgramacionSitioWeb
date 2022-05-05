<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad12";

// Create connection
$conn  = new  mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    echo "Conexion exitosa";
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
        echo "Tabla Producto creada satisfactoriamente";
    } else {
        echo "Error creando tabla Producto: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    ?>