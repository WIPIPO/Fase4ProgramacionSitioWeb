

<?php ob_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
       
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 
<style>
   .bd-placeholder-img {
     font-size: 1.125rem;
     text-anchor: middle;
     -webkit-user-select: none;
     -moz-user-select: none;
     user-select: none;
   }

   @media (min-width: 768px) {
     .bd-placeholder-img-lg {
       font-size: 3.5rem;
     }
   }
 </style>


    <title>Andes Electrónica</title>
  </head>
  <body>  
    

    <?php


require('configCon.php');

 
$sql = "SELECT * FROM `productos` WHERE 1 ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {

    
?>

<div class="row justify-content-center align-items-center">



<div class="col-md-10">

  <div class="card" id="tablaUsuarios">
    <div class="card-header">
      <h3 class="card-title">Productos registrados</h3>

      <div class="card-tools">
        <!--  <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="caja_busqueda" id="caja_busqueda" class="form-control float-right" placeholder="Search"></input>
          <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
          </div>
        </div> -->

      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 500px;">

      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th class="text-center" scope="col" style="width: 50px;">Id</th>
            <th   style="width: 50px;" >Nombre</th>
            <th   style="width: 50px;" >Marca</th>
            <th   style="width: 50px;">Precio</th>
            <th   style="width: 50px;">Cantidad</th>
          </tr>
        </thead>
        <tbody>

        
          <?php  while($row = mysqli_fetch_assoc($result))  { ?>
            <tr>
    
              <td class="text-center"><span class="badge bg-secondary"><?php echo $row['IdProducto']; ?></span></td>
              <td class="text-center"><span class="badge bg-primary"><?php echo $row['Nombre']; ?></span></td>
              <td class="text-center"><span class="badge bg-success"><?php echo $row['Marca']; ?></span></td>
              <td class="text-center"><span class="badge bg-danger"><?php echo $row['Precio']; ?></span></td>
              <td class="text-center"><span class="badge bg-warning"><?php echo $row['Cantidad']; ?></span></td>

             
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>


    </div>
    <!-- /.card-body -->
  </div>


  </div>
</div>

   <?php


    
} else {
    ?>
    <div class= "alert alert-danger" role="alert">
        No hay productos registrados
    </div>   
        <?php
}

?>


<footer>
        
        </footer>
            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>     
        
    
            </body>
    
    </html>
  <?php  $html=ob_get_clean();
    
    //echo $html;
    
    require_once '../librerias/dompdf/autoload.inc.php' ;
    Use Dompdf\Dompdf ;
    $dompdf = new Dompdf();
    $options =$dompdf->getOptions();
    $options->set(array('isRemoteEnable' =>true));
    $dompdf ->setOptions($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('letter');
    $dompdf->render();
    $dompdf->stream("archivo_.pdf" , array("Attachment"=>false))
    
    ?>
