<?php
require_once ("autoload.php");

$objUsuario = new usuario();

//Insertar usario

$insert =$objUsuario->insertUsuario("jose",9831523633,"jose_aries@hotmail.com");

echo " estas conectado".$insert;


?>