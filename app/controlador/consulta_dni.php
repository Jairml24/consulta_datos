<?php
include_once('../class/personaClass.php');
$objCon = new Persona();

if (isset($_POST['dni'])) {
    $datos_persona = $objCon->consultar_persona_dni($_POST['dni']);
    $data =  $datos_persona;
    print json_encode($data);
}
