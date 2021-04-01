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

    public function insertUsuario(string $nombre,int $telefono, string $email)
    {
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


}


?>