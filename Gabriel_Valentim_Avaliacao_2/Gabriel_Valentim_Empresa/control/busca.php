<?php
	include '../model/crudEmpresa.php';

	$pesquisa = $_POST["palavra"];

	switch ($pesquisa) {
		case 'tudo':
			$resultado = mostrarEmpresas();
			break;
		default:
			$resultado = mostrarEmpresasPesquisar($pesquisa);
			break; 
	}

	if (mysqli_num_rows($resultado) <=0 ) {
		echo 'Nenhuma Empresa encontrada';
	} else {
		while($resultadoSeparado = mysqli_fetch_assoc($resultado)){
			echo "
				<tr>
					<td>$resultadoSeparado[nome]</td>
					<td>$resultadoSeparado[nome_empresa]</td>
					<td>$resultadoSeparado[cnpj]</td>
					<td>
						<a class='btn btn-warning' style='font-family: Arial Black; color: #000000;' 
							href='editarEmpresa.php?id=$resultadoSeparado[id]'>EDITAR
						</a>
					</td>
				</tr>
			";
		}
	}
?>