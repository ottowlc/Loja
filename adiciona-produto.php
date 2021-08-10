<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loja</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
</head>
<body>

	<div class="container">
		<div class="principal">
			<?php

			$nome = $_GET['nome'];
			$preco = $_GET['preco'];

			?>

			<p class="alert-success">
				Produto <?php echo $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!!!
			</p>
		</div>
	</div>

</body>
</html>