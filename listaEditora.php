<html>
<head>
   <title>Lista de Viagens</title>
	<style type="text/css">
      @import url(css/padrao.css);
	</style>
</head>
<body>
	<div class="Botoes" style="text-align: center;">
		<input class="Botao" type="button" value="Novo" 	onclick="javascript: location.href='cadastroEditora.php';" />
		<input class="Botao" type="button" value="Voltar" 	onclick="javascript: location.href='index.php';" />
	</div>	
	<div class="titulo">
		<h1>Lista de Editoras</h1>
	</div>
	<br />
	<div id="Frame">
<?php
	include_once("conexao.php"); 
	
	// Colocando o Início da tabela
?>
	<table border="1px"><tr>
	   <td><b>NOME</b></td>
	</tr>
<?php
	
	// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
	//$query = "select codigo, data, placa, motorista, cliente, categoria, origem, destino, nf, valor_nf, peso, diferenca, frete, comissao by data";
	$sql = "SELECT * FROM editora";
	$resultado = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_assoc($resultado)){ 
?>
	   <tr>
		  <td><?php echo $rows['nome']; ?></td>
		  <td>
<?php 
		
		echo "<a href='apagaEditora.php?id=" . $rows['id'] . "'>Apagar</a>";
		echo "<a href='alteraEditora.php?id=" . $rows['id'] . "'>Editar</a><br>";
	  //  echo "<a href=\"#\" onclick=\"javascript: editaEditora('". $rows['id'] . "','" .$rows['nome'] ."');\">Edita</a>"; 
	  //  echo "<a href=\"#\" onclick=\"javascript: apagaEditora('". $rows['id'] . "');\">Apaga</a>&nbsp;"; 
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
