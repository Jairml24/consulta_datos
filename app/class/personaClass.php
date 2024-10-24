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

}
?>