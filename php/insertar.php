<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iNSERTAR</title>
    
    <!-- CSS only --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        

</head>

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
                <button type="button" class="close"onclick="location.href='../agregar.html'">&times;</button>
            </div>
            <div class="modal-body">
                <p>El registro se ha realizado con éxito</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"onclick="location.href='../agregar.html'">Cerrar</button>
                
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
                <button type="button" class="close"onclick="location.href='../agregar.html'">&times;</button>
            </div>

            <div class="modal-body">
                <?php
                echo "Error: El registro no se ha realizado con éxito " . $sql . "<br>" . mysqli_error($conn);
                ?>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"onclick="location.href='../agregar.html'">Cerrar</button>
                
            </div>
        </div>
    </div>
    <?php
    }
    mysqli_close($conn);
    ?>
</body>


