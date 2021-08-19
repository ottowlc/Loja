<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");
?>

<table class="table table-stripe table-bordered">
  <?php
    $produtos = listaProdutos($conexao);

    foreach ($produtos as $produto) :
  ?>
      <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
      </tr>
  <?php
    endforeacH  
  ?>  
</table>


<?php include("rodape.php"); ?>