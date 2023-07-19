<?php
	include '../model/crudEmpresa.php';

	$opcao = $_POST["opcao"];

	switch($opcao){
		case 'Registrar':
			registrarEmpresa($_POST["nome"], $_POST["nome_empresa"], $_POST["cnpj"]);
			header("Location: ../view/cadastrarEmpresa.php");
		break;

		case 'Editar':
			alterarEmpresa($_POST["id"], $_POST["nome"], $_POST["nome_empresa"], $_POST["cnpj"]);
			header("Location: ../view/secoes/visualizarEmpresa.php");
		break;

		case 'Excluir':
			excluirEmpresa($_POST["id"]);
			header("Location: ../view/secoes/visualizarEmpresa.php");
		break;
	}
?>