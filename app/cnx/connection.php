<?php
require '../../vendor/autoload.php';
class Connection
{
   function FunctionConnection()
   {
      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../..');
      $dotenv->load();
      $dbUser = $_ENV['DB_USER'];
      $dbPass = $_ENV['DB_PASS'];
      $dbName = $_ENV['DB_NAME'];
      $dbHost = $_ENV['DB_HOST'];
      $dbPort = $_ENV['DB_PORT'];

      $obj_pgsql = '';
      $dsn = "pgsql:host=" . $dbHost . ";port=" . $dbPort . ";dbname=" . $dbName;

      try {
         $obj_pgsql = new PDO($dsn, $dbUser, $dbPass);
         $obj_pgsql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
         echo "Ocurrió un error con la base de datos: " . $e->getMessage();
      }
      return $obj_pgsql;
   }
   function CloseConnection()
   {
      $obj_pgsql = null;
   }
}


class ConnectionSunat
{
   function FunctionConnection()
   {
      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../..');
      $dotenv->load();
      $dbUser = $_ENV['DB_USER'];
      $dbPass = $_ENV['DB_PASS'];
      $dbName = $_ENV['DB_NAME_SUNAT'];
      $dbHost = $_ENV['DB_HOST'];
      $dbPort = $_ENV['DB_PORT'];

      $obj_pgsql = '';
      $dsn = "pgsql:host=" . $dbHost . ";port=" . $dbPort . ";dbname=" . $dbName;

      try {
         $obj_pgsql = new PDO($dsn, $dbUser, $dbPass);
         $obj_pgsql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
         echo "Ocurrió un error con la base de datos: " . $e->getMessage();
      }
      return $obj_pgsql;
   }
   function CloseConnectionSunat()
   {
      $obj_pgsql = null;
   }
}

class ConnectionSunarp
{
   function FunctionConnection()
   {
      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../..');
      $dotenv->load();
      $dbUser = $_ENV['DB_USER'];
      $dbPass = $_ENV['DB_PASS'];
      $dbName = $_ENV['DB_NAME_SUNARP'];
      $dbHost = $_ENV['DB_HOST'];
      $dbPort = $_ENV['DB_PORT'];

      $obj_pgsql = '';
      $dsn = "pgsql:host=" . $dbHost . ";port=" . $dbPort . ";dbname=" . $dbName;

      try {
         $obj_pgsql = new PDO($dsn, $dbUser, $dbPass);
         $obj_pgsql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
         echo "Ocurrió un error con la base de datos: " . $e->getMessage();
      }
      return $obj_pgsql;
   }
   function CloseConnectionSunat()
   {
      $obj_pgsql = null;
   }
}