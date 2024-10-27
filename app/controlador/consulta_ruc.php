<?php
include_once('../class/personaClass.php');
$objCon = new Persona();

if (isset($_POST['ruc'])) {
    $datos_ruc = $objCon->consultar_ruc(trim($_POST['ruc']));
    $data =  $datos_ruc;
    print json_encode($data);
}
