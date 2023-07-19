<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>MASSAURO RPG</title>
    </head>

    <body style="background-color: #d9b2ff;">

    	<div>
	        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #674ca3;">
	        	<a class="navbar-brand" href="https://www.youtube.com/channel/UCQuJR8mbYx_tZi8uA15sAvw">
	        		<img src="../img/perfil1.png" width="35" height="35" class="d-inline-block align-top" alt="Kenny Steam imagem" title="Kenny Steam">
	            <a class="navbar-brand" href="#">MASSAURO RPG</a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <ul class="navbar-nav mr-auto">
	                    <li class="nav-item">

	                        <a class="nav-link" href="../Index.php" title="Cadastrar">Cadastrar Avatar</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="listarAvatar.php" title="Listar">Mostrar Personagens</a>
	                    </li>

	                </ul>
	               
	            </div>
	        </nav>
	    </div>

        <div class="container">
        	<div class="col-md-8">
	        	<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

	        	<?php
	        		include '../../model/crudAvatar.php';
	        		$id=$_GET["id"];
	        		$resultado=mostrarAvatarEditar($id);
	        		$resultadoSeparado=mysqli_fetch_assoc($resultado);
        		?>

		        <form method="post" action="../../control/controleAvatar.php">
		        	<h1 style="font-family: Courier New; font-weight: bold;">MUDE O SEU PERSONAGEM</h1>

					<div class="form-group">
				    	<label for="nick">Nome do Avatar</label>
				    	<input type="text" class="form-control" id="nick" name="nick" value="<?php echo $resultadoSeparado['nick']; ?>">
				    </div>

				   	<div class="form-group">
	    			<label for="classe">Classe</label>
	    				<select class="form-control" id="classe" name="classe">
				      		<option>Guerreiro</option>
				      		<option>Mago</option>
				      		<option>Arqueiro</option>
				      		<option>Lanceiro</option>
				      		<option>Assassino</option>
				    	</select>
					</div>

					<div class="form-group">
					    <label for="guilda">Guilda</label>
					    	<select multiple class="form-control" id="guilda" name="guilda">
						      	<option>Resist</option>
						      	<option>Blue-Eyes</option>
						      	<option>LEAM</option>
						      	<option>Well+Played</option>
						      	<option>Lords of chaos</option>
					    </select>
	    			</div>
				 
				  	<input type="hidden" name="id" value="<?php echo $resultadoSeparado['id']; ?>">
				  	<button type="submit" class="btn btn-warning btn-lg btn-block" name="opcao" value="Alterar">Alterar</button>
				  	<button type="submit" class="btn btn-outline-danger btn-lg btn-block" name=opcao value="Excluir">Excluir</button>
				  	<a class="btn btn-outline-info btn-lg btn-block" href="listarAvatar.php">Cancelar</a>
				</form>
			</div>
		</div>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>