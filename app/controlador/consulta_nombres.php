<?php
include_once('../class/personaClass.php');
$objCon = new Persona();

if (isset($_POST['nombres'])) {
    $nombres = mb_strtoupper(mb_convert_encoding(trim($_POST['nombres']), 'UTF-8','auto'));
    $datos_persona = $objCon->consultar_persona_nombres($nombres);
    $data = $datos_persona;
    print json_encode($data);
}
