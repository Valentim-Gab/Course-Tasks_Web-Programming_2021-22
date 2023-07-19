<?php
	include '../model/crudAvatar.php';

	$opcao = $_POST["opcao"];

	switch($opcao){
		case 'Cadastrar':
			//$descricao = $POST_["descricao"];
			//$preco = $POST_["preco"];
			cadastrarAvatar($_POST["nick"], $_POST["classe"], $_POST["guilda"]);
			header("Location: ../view/Index.php");
		break;

		case 'Alterar':
			editarAvatar($_POST["id"], $_POST["nick"], $_POST["classe"], $_POST["guilda"]);
			header("Location: ../view/secoes/listarAvatar.php");
		break;

		case 'Excluir':
			excluirAvatar($_POST["id"]);
			header("Location: ../view/secoes/listarAvatar.php");
		break;
	}
?>