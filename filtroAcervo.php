<?php
	include_once("conexao.php"); 
?>
<html>
	<head>
		<title>Livraria do Lucio</title>
		<link href="css/livraria.css" rel="stylesheet" type="text/css"/>
	</head>
	<div class='principal'>
	<body>
		<!--Cabeçalho  -->
		<div id="titulo">
			<p color="#777">LIVRARIA DO LUCIO</p>
		</div>
		
		<!--Esquerda onde ficarao os menus  -->
		<div id="menu">
			<ul id="nav">
				<li><a href="index.php" alt="Volta a pagina inicial">Inicio</a></li> 
				<li><a href="#">Relatórios</a> 
					<ul> 
						<li><a href="filtroAcervo.php">Pesquisar Livro</a></li>
						<li><a href="listaAcervo.php">Livros</a></li> 
						<li><a href="listaEditora.php">Editora</a></li> 
					</ul> 
				</li> 
				<li><a href="#">Cadastro</a> 
					<ul> 
						<li><a href="cadastroAcervo.php">Livro</a></li>
						<li><a href="cadastroEditora.php">Editora</a></li> 
					</ul> 
				</li> 
			</ul>
		</div>
		<!-- Colocando umas imagens de frufru pode mudar a vontade o layout  -->
		<div>
			<img src="imagens/logo1.png" width="150" height="120" id="logo">
		</div>

		<!-- Rodape  -->
		<div id="rodape">
			<p>Desenvolvido por: Lucio Flavio </p>
		</div>
	
	
	
	<!-- cadastro  -->
<div id="centro" >	
	<form action="listaAcervo.php" method="post">
		<h1>Pesquisar Livro</h1>
		<input type="text" placeholder="Pesquisa por nome..." name="pesquisa">
		<input type="hidden" name="funcao" value="filtro">
		<br />
		<input type="submit" value="Pesquisar">
	</form>
</div>

</body>
</html>
