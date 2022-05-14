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

<body>
   <?php
   require("configCon.php");


    $i = $_POST['CodigoP'];
    $n = $_POST['NombP'];
    $m = $_POST['MarcaP'];
    $p = $_POST['PrecioC'];
    $c = $_POST['CantidadC'];

    $sql = "INSERT INTO Productos (IdProducto, Nombre, Marca, Precio, Cantidad) VALUES ('$i', '$n', '$m', '$p', '$c')";
       

   
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
    ?>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Registro exitoso</h4>
                <button type="button" class="close"onclick="location.href='../agregar.php'">&times;</button>
            </div>
            <div class="modal-body">
                <p>El registro se ha realizado con éxito</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"onclick="location.href='../agregar.php'">Cerrar</button>
                
            </div>
        </div>
    </div>

    <?php
    } else {
    ?>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Error</h4>
                <button type="button" class="close"onclick="location.href='../agregar.php'">&times;</button>
            </div>

            <div class="modal-body">
                <?php
                echo "Error: El registro no se ha realizado con éxito " . $sql . "<br>" . mysqli_error($conn);
                ?>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"onclick="location.href='../agregar.php'">Cerrar</button>
                
            </div>
        </div>
    </div>
    <?php
    }
    mysqli_close($conn);
    ?>
</body>


