<!DOCTYPE html>
<html lang="es">
<head>
  <title>Actualizar</title>
    <title>Actualizar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS only -->
  <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script>
            function solonumeros(e)
            {
                key=e.keyCode || e.which;
                teclado=String.fromCharCode(key).toString();
                numeros="0123456789";
                especiales="37-38-46";
                teclado_especial=false;
                for(var i in especiales)
                {
                    if(key==especiales[i]){
                        teclado_especial=true;
                        break;
                    }        
                } 
                if(numeros.indexOf(teclado)== -1 && !teclado_especial){
                    return false;
                }
            }
                
        </script>
</head>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">Computers SAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Administrador</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Inventario</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="agregar.html">Ingresar Producto</a>
                            <a class="dropdown-item" href="actualizar.html">Actualizar Producto</a>
                            <a class="dropdown-item" href="eliminar.html">Eliminar Producto</a>
                            <a class="dropdown-item" href="consultar.html">Consultar Producto</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Utilidades</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="calcular.html">Calcular Producto</a>
                                <a class="dropdown-item" href="ConversionUnIf.html">Conversion de Unidades de informacion</a>
                            </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

 <?php
 
  
  require('configCon.php');

     $id = $_POST['CodigoP'];//se recibe el name del codigo del producto a actualizar
    $nombre = $_POST['NombP']; //se recibe el name del nombre a actualizar
    $marca = $_POST['MarcaP']; // se recibe el name de la marca
    $precio = $_POST['PrecioC'];    //se recibe el name del precio
    $cantidad = $_POST['CantidadC']; //se recibe el name de la cantidad

    $sql = "UPDATE productos SET Nombre='$nombre', Marca='$marca', Precio='$precio', Cantidad='$cantidad' WHERE IdProducto='$id'";

    if (mysqli_query($conn, $sql)) {


        ?>
        
        <!-- The Modal -->
          
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Excelente</h4>
                  <button class="close" onclick="location.href='../index.php'">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  
                 <?php
                echo "Información actualizada satisfactoriamente " . "<br>";
                ?>
        
        
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button class="btn btn-danger" onclick="location.href='../index.php'">Cerrar</button>
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
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../index.php'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "Error actualizando la información " . "<br>". mysqli_error($conn);
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.php'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php

}

mysqli_close($conn);
?> 

    
    

