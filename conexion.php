<?php

 class Conexion{

     private $host = "localhost";
     private $use = "root";
     private $password ="";
     private $db = "db_sistema";
     private $conect;

     public function __construct()
     {
         $conexionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
             try {
            $this->conect = new PDO($conexionString,$this->use,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // echo  "conexion exitosa";
             }catch (Exception $e){
              $this->conect = "error de conexion";
              echo "Error : ".$e->getMessage();
             }
     }

 public function Connect(){

     return  $this->conect;
 }

 }
$conect = new Conexion();
?>
