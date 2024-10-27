<?php
include_once('../class/personaClass.php');
$objCon = new Persona();

if (isset($_POST['placa'])) {
    $datos_placa = $objCon->consultar_placa(strtoupper(trim($_POST['placa'])));
    $data =  $datos_placa;
    print json_encode($data);
}
