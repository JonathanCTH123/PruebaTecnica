<?php


require_once('../clases/get_data.php');

$obj = new getDataClass();



$proByIdSupl= $obj->getProductsByIdSupplier(6);



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Consumo de API</title>
  </head>
  <body>
 <div class="m-0 row justify-content-center">
    <h3 class="m-1 text-center">Datos desde Base de datos</h3>
    <div class="row">
        <div class="col-md-12 col-auto  p-2 text-center">
        <table class="table table-responsive table-striped table-hover">
  <thead>
  <tr>
  
   
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Producto</th>
      <th scope="col">Costo</th>
      <th scope="col">Proveedor</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $item=0;
    foreach ($proByIdSupl as $key) {
        $item++;
        echo "
        <tr>
        <th scope='row'>".$item."</th>
        <td>".$key['product_code']."</td>
        <td> ".$key['product_name']."</td>
        <td> ".$key['standard_cost']."</td>
        <td>".$key['company']."</td>

      </tr>";
    }
    ?>
   
    
  </tbody>
</table>
<a  class="btn btn-success" href="../swagger/">Ir consumo de API SWAGGER</a>


        </div>
    </div>
 </div>

 
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>