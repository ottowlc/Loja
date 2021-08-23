<?php 

include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php");



	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$descricao = $_GET['descricao'];

	
	if(insereProduto($conexao, $nome, $preco, $descricao)) {
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