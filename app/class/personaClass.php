<?php
include_once('../cnx/connection.php');

class Persona
{

    function consultar_persona_dni($dni)
      {
          $obj=new Connection();
          $objCnx=$obj->FunctionConnection();
          $stmt  = $objCnx->prepare("select * from pide.personas where dni=?");
          $stmt->execute([$dni]);
          return $stmt->fetchAll(PDO::FETCH_OBJ);   
          $objCnx->CloseConnection();
      }
      function consultar_persona_nombres($nombres)
      {
          $obj=new Connection();
          $objCnx=$obj->FunctionConnection();
          $stmt  = $objCnx->prepare("select * from pide.personas WHERE CONCAT(nombres, ' ', apellido_paterno, ' ', apellido_materno) = ? LIMIT 1");
          $stmt->execute([$nombres]);
          return $stmt->fetchAll(PDO::FETCH_OBJ);   
          $objCnx->CloseConnection();
      }

      function consultar_ruc($ruc)
      {
          $obj=new ConnectionSunat();
          $objCnx=$obj->FunctionConnection();
          $stmt  = $objCnx->prepare("select * from public.proveedor WHERE ddp_numruc= ?");
          $stmt->execute([$ruc]);
          return $stmt->fetchAll(PDO::FETCH_OBJ);   
          $objCnx->CloseConnectionSunat();
      }

      function consultar_placa($placa)
      {
          $obj=new ConnectionSunarp();
          $objCnx=$obj->FunctionConnection();
          $stmt  = $objCnx->prepare("select * from public.vehiculos WHERE placa= ?");
          $stmt->execute([$placa]);
          return $stmt->fetchAll(PDO::FETCH_OBJ);   
          $objCnx->CloseConnectionSunarp();
      }


}
?>