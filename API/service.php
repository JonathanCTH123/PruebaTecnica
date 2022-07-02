<?php

require_once('../clases/get_data.php');
require_once('../clases/set_data.php');
$get = new getDataClass();
$set = new setDataClass();

$method = $_POST["method"];

switch ($opc) {
    case 'Listar':
        $get->getOrders();
        break;
    case 'Agregar':
        $set->set_order($data);
        break;
    default:
        # code...
        break;
}
