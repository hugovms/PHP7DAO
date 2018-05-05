<?php
require_once("config.php");
//carrega um user
//$root = new Usuario();
//$root->loadById(3);
//echo $root; 

//carrega lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search  = Usuario::search("e");
//echo json_encode($search);

// carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("leklek","445566");

echo $usuario;

?>