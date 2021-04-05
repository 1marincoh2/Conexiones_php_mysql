<?php
require_once ("autoload.php");

$objUsuario = new usuario();

//Insertar usario
//$insert =$objUsuario->insertUsuario("alina",9831523633,"aries@hotmail.com");
//echo " estas conectado".$insert;

//Actualiza registro
//$updateUser = $objUsuario->updateUsuarios(3,"alina sayuri",963289623,"alisayu@hotmail");
//echo $updateUser;



//extrae todos los registro
$users =  $objUsuario->getUsuarios();
print_r("<pre>");
print_r($users);
print_r("</pre>");

//solo extrae un dato
$userst = $objUsuario->getUsert(2);
print_r("<pre>");
print_r($userst);
print_r("</pre>");

$deleteUsuario = $objUsuario->deleteUser(1);
echo $deleteUsuario;
?>