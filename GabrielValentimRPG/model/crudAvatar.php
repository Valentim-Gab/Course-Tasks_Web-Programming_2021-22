<?php
	include 'conexao.php';

	function cadastrarAvatar($nick, $classe, $guilda) {
		connect();
		query("INSERT INTO avatar (nick, classe, guilda) VALUES ('$nick', '$classe', '$guilda')");
		close();
	}

	function listarAvatar() {
		connect();
		$resultado = query("SELECT * FROM avatar");
		close();
		return $resultado;
	}

	function mostrarAvatarEditar($id) {
		connect();
		$resultado = query("SELECT * FROM avatar WHERE id=$id");
		close();
		return $resultado;
	}

	function editarAvatar($id, $nick, $classe, $guilda) {
		connect();
		$resultado = query("UPDATE avatar SET nick='$nick', classe='$classe', guilda='$guilda' WHERE id=$id");
		close();
		return $resultado;
	}

	function excluirAvatar($id) {
		connect();
		$resultado = query("DELETE FROM avatar WHERE id=$id");
		close();
		return $resultado;
	}
?>