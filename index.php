<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios procurando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega por usuarios já com login (Login e senha)
$usuario = new Usuario();
$usuario->login("joao","qwerty123");

echo $usuario;


?>