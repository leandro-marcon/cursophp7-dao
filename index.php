<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
///CARREGA APENAS UM USUARIO POR VEZ
/*
$root = new Usuario();
$root->loadbyID(3);
echo $root;
*/
/*
//CARREGA UMA LISTA DE USUARIOS

$lista =  Usuario::getList();

echo json_encode($lista);
*/
/*
//CARREGA UMA LISTA DE USUARIO BUSCADO PELO LOGIN
$search = Usuario::search("o");
echo json_encode($search);
*/

//CARREGA UM OSUARIO USANDO LOGIN E SENHA
/*
$usuario = new Usuario();
$usuario->login("leandro", "1003");//passa dois parametros validos
echo $usuario;
*/
//CRIANDO UM NOVO USUARIO
/*
$aluno = new Usuario("aluno", "14566");

$aluno->insert();//chama a função de insert dentro do usuario

echo $aluno;
*/


$usuario = new Usuario();

$usuario->loadById(3);


$usuario->update("ISIS", "88787");
echo $usuario;
 ?>