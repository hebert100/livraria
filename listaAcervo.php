<?php
	$funcao = $_POST['funcao'];
	$pesquisa = $_POST['pesquisa'];
?>


<html>
<head>
   <title>Acervo</title>
	<style type="text/css">
      @import url(css/padrao.css);
	</style>

</head>
<body>
	<div class="Botoes" style="text-align: center;">
		<input class="Botao" type="button" value="Novo" 		onclick="javascript: location.href='cadastroAcervo.php';" />
		<input class="Botao" type="button" value="Voltar" 		onclick="javascript: location.href='index.php';" />
	</div>	
	<div class="titulo">
		<h1>Acervo</h1>
	</div>
	<br />


	<div id="Frame">
<?php
		include_once("conexao.php"); 
	
	// Colocando o Início da tabela
?>
	<table border="1px"><tr>
	   <td><b>EDITORA</b></td>
	   <td><b>TITULO</b></td>
	   <td><b>AUTOR</b></td>
	   <td><b>ANO</b></td>
	   <td><b>PREÇO</b></td>
	   <td><b>QUANTIDADE</b></td>
	   <td><b>TIPO</b></td>
	</tr>
<?php
	if ($funcao == "filtro"){
		$sql = "SELECT * FROM acervo WHERE titulo LIKE '%$pesquisa'"; 
	}else{
		$sql = "SELECT * FROM acervo";
}
	$resultado = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_assoc($resultado)){ 
?>
	   <tr>
		   <?php
		    $id = $rows['idEditora'];
			$sqlEditora = "SELECT * FROM editora WHERE id = $id ";
			$resEditora = mysqli_query($conn, $sqlEditora);
		    $editora = mysqli_fetch_assoc($resEditora);
		   ?>
		  <td><?php echo $editora['nome']; ?></td>
		  <td><?php echo $rows['titulo']; ?></td>
		  <td><?php echo $rows['autor']; ?></td>
		  <td><?php echo $rows['ano']; ?></td>
		  <td><?php echo $rows['preco']; ?></td>
		  <td><?php echo $rows['quantidade']; ?></td>
		  <td><?php echo $rows['tipo']; ?></td>
		  <td>
<?php 
		echo "<a href='apagaAcervo.php?id=" . $rows['id'] . "'>Apagar</a>";
		echo "<a href='alteraAcervo.php?id=" . $rows['id'] . "'>Editar</a><br>";
?>
	      </td>
	   </tr>
<?php

	}
?>
</table>
	</div>
</body>
</html>
