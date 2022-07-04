<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/consumo.js"></script>
</head>
<body>
<button class="btn btn-success" onclick="viewOrders()">Obtener datos</button>
<button class="btn btn-primary" onclick="setDto()">Agregar datos</button>
<button class="btn btn-warning" onclick="deleteFirst()">Eliminar el primer dato</button>


<div class="row">
    <h5>Datos Actualizados</h5>
    <div class="col-md-6" id="print_orders">

    </div>
    <div class="col-md-6" id="">

    </div>
</div>
</body>
</html>