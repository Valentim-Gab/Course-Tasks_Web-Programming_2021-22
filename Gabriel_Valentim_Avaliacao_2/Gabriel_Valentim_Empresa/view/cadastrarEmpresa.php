<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Nova Empresa</title>
</head>
<body style="background-color: #d6d7d9;">

	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="font-family: Courier New;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">GOV EMPRESARIAL</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="cadastrarEmpresa.php">Registrar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="secoes/visualizarEmpresa.php">Visualizar</a>
					</li>

				</ul>		      	
			</div>
		</div>
	</nav>

	<div class="container" style="font-family: Helvetica;">
		<form method="post" action="../control/controleEmpresa.php">
			<div><p>&nbsp;</p></div>
			<div class="row h-100 justify-content-center align-items-center">
				<h3>REGISTRAR EMPRESA</h3>
			</div>
			<div class="mb-3">
				<label for="nome" class="form-label">NOME EMPRESARIAL:</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do(a) dono(a) da empresa">
			</div>
			<div class="mb-3">
				<label for="nome_empresa" class="form-label">NOME FANTASIA:</label>
				<input type="text" class="form-control" id="nome_empresa" name="nome_empresa" placeholder="Digite o nome da empresa">
			</div>
			<div class="mb-3">
				<label for="cnpj" class="form-label">CNPJ:</label>
				<input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="99.999.999/9999-99">
			</div>
			<button type="submit" class="btn btn-primary" name="opcao" value="Registrar" style="font-family: Arial Black;">
				REGISTRAR
			</button>
		</form>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="JS/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="JS/mascaras.js" type="text/javascript"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	    <!--
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	-->


</body>
</html>