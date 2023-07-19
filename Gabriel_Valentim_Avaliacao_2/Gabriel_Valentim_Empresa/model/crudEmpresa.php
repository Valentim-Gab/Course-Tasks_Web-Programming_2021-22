<?php
	include 'conexao.php';

	function registrarEmpresa($nome, $nome_empresa, $cnpj) {
		connect();
		query("INSERT INTO empresarial (nome, nome_empresa, cnpj) VALUES ('$nome', '$nome_empresa', '$cnpj')");
		close();
	}

	function mostrarEmpresas() {
		connect();
		$resultado = query("SELECT * FROM empresarial");
		close();
		return $resultado;
	}

	function buscarEmpresa($id) {
		connect();
		$resultado = query("SELECT * FROM empresarial WHERE id=$id");
		close();
		return $resultado;
	}

	function alterarEmpresa($id, $nome, $nome_empresa, $cnpj) {
		connect();
		$resultado = query("UPDATE empresarial SET nome='$nome', nome_empresa='$nome_empresa', cnpj='$cnpj' WHERE id=$id");
		close();
		return $resultado;
	}

	function excluirEmpresa($id) {
		connect();
		$resultado = query("DELETE FROM empresarial WHERE id=$id");
		close();
		return $resultado;
	}

	function mostrarEmpresasPesquisar($pesquisa) {
		connect();
		$resultado = query("SELECT * FROM empresarial WHERE nome 
			LIKE '%$pesquisa%' OR nome_empresa LIKE '%$pesquisa%' OR cnpj LIKE '%$pesquisa%'");
		close();
		return $resultado;
	}
?>