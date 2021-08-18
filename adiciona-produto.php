<?php include("cabecalho.php") ?>
<?php include("conecta.php"); ?>

<?php

	function insereProduto($conexao, $nome, $preco){

		$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
		return mysqli_query($conexao, $query);

	}

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	
	if(insereProduto($conexao, $nome, $preco)) {
?>
		<p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi adicionado</p>
<?php
	} else {

		$msg = mysqli_error($conexao);
?>
		<p class="text-danger">O produto <?= $nome ?>, <?= $preco ?> não foi adicionado: <?= $msg ?></p>
<?php
	}
?>
			
<?php include("rodape.php") ?>	