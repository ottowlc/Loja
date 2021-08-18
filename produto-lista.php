<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>


<?php  

	$produtos =  listaProdutos($conexao);
	foreach ($produtos as $produto) {
		echo $produto['nome'] . "</br>";
	}

?>

<?php include("cabecalho.php"); ?>