<?php


require_once('../clases/get_data.php');

$obj = new getDataClass();



$data_credits= $obj->getListSwagger();



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
    <h3 class="m-5 text-center">Datos desde API</h3>
    <div class="row">
        <div class="col-md-12 col-auto  p-5 text-center">
        <table class="table table-responsive table-striped table-hover">
  <thead>
  <tr>
  
   
      <th scope="col">#</th>
      <th scope="col">Fecha de alta</th>
      <th scope="col">Cuota de credito</th>
      <th scope="col">Saldo Capital</th>
      <th scope="col">Cliente</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $item=0;
    foreach ($data_credits as $key) {
        $item++;
        echo "
        <tr>
        <th scope='row'>".$item."</th>
        <td>".$key['fechaAlta']."</td>
        <td>$ ".$key['cuotaCredito']."</td>
        <td>$ ".$key['saldoCapital']."</td>
        <td>".$key['cliente']['nombre']."</td>

      </tr>";
    }
    ?>
   
    
  </tbody>
</table>
<a  class="btn btn-success" href="../views/v_product_list.php">Ir listado de productos</a>

        </div>
    </div>
 </div>

 
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>