<?php
require_once("autoload.php");

class usuario extends Conexion
{
    private $strNombre;
    private $intTelefono;
    private $strEmail;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion-> Connect();
    }

    public function insertUsuario(string $nombre,int $telefono, string $email){

        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;


        $sql = "INSERT INTO Usuario(nombre,telefono,email) value(?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);
        $resInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;


     }

    public function getUsuarios()
    {
        $sql = "SELECT * FROM Usuario";
        $execute = $this->conexion->query($sql);
        $request = $execute -> fetchall(PDO::FETCH_ASSOC);

        return $request;
    }

    public function updateUsuarios(int $id, string $nombre,int $telefono, string $email)
    {
        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;
       $sql = "UPDATE Usuario SET nombre=?, telefono=?, email=? WHERE id=$id";
       $update = $this->conexion->prepare($sql);
       $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);
       $resExecute = $update ->execute($arrData);
       return $resExecute;
    }
  // solo trae una consulta
    public function getUsert(int $id)
    {
  $sql = "SELECT * FROM Usuario WHERE id=?";
  $arrayId = array($id);
  $query = $this->conexion->prepare($sql);
  $query->execute($arrayId);
    $request = $query->fetch(PDO::FETCH_ASSOC);
  return $request;
    }

    public function deleteUser(int $id)
    {
   $sql = "DELETE FROM Usuario WHERE id= ?";
   $arrWhere =  array($id);
   $delet = $this->conexion->prepare($sql);
   $del = $delet->execute($arrWhere);
   return $del;
    }

}


?>