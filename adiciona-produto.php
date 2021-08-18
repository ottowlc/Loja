<?php include("cabecalho.php") ?>

<?php

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	$conexao = mysqli_connect('localhost', 'root', '', 'loja');

	$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";

	if(mysqli_query($conexao, $query)) {
?>
		<p class="alert-success">O produto <?= $nome ?>, <?= $preco ?> foi adicionado</p>
<?php
	} else {

		echo $query;
?>
		<p class="alert-danger">O produto <?= $nome ?>, <?= $preco ?> não foi adicionado</p>
<?php
	}
?>
			
<?php include("rodape.php") ?>	