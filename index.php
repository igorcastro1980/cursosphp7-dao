<?php

	require_once ("config.php");

	//Carrega um usuário
	//$root = new Usuario();
	//$root -> loadById(3);
	//echo $root;

	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega lista de usuarios buscando pelo login
	//$busca = Usuario::search("o");
	//echo json_encode($busca);

	//Carrega usuário usando o login e a senha.
	$usuario = new Usuario();
	$usuario->login("Joao","123654");

 ?>
