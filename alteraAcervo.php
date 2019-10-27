<?php
	include_once("conexao.php"); 
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$sql = "SELECT * FROM acervo WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$rows = mysqli_fetch_assoc($resultado);
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

<form action="updateAcervo.php" name="update" method="post" id="formulario" >
    <div class="box"> 
		<h1>Altera Livro</h1>
        <span>Editora</span>
		<label>
            <select class="select" name="editora">
				<option>Selecione..</option>
				<?php
					$sql = "SELECT * FROM editora";
					$resultado = mysqli_query($conn, $sql);
					while ($rows1 = mysqli_fetch_assoc($resultado)){ ?>
						<option value="<?php echo $rows1['id']; ?>" >
							<?php echo $rows1['nome']; ?>
						</option> <?php
					}
				?>
			</select>
        </label>
	<Br />
	<!-- Input Hidden para enviar o ID  -->
	<input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
        <label>
            <span>Titulo</span>
            <input type="text" class="input_text" name="titulo"  value="<?php echo $rows['titulo']; ?>"/>
         </label>
  <Br />
        <label>
            <span>Autor</span>
            <input type="text" class="input_text" name="autor" id="autor" value="<?php echo $rows['autor']; ?>"/>
        </label>
  <Br />
        <label>
             <span>Ano</span>
            <input class="input_text" name="ano" id="ano" value="<?php echo $rows['ano']; ?>" />
         </label>  
         <Br />
         <label>
             <span>Preço</span>
            <input class="input_text" name="preco" id="preco" value="<?php echo $rows['preco']; ?>" />
         </label>
         <Br />  
         <label>
             <span>Quantidade</span>
            <input class="input_text" name="quantidade" id="quantidade" value="<?php echo $rows['quantidade']; ?>" />
         </label> 
         <Br />             
         <label>
             <span>Tipo</span>
            <input class="input_text" name="tipo" id="tipo" value="<?php echo $rows['tipo']; ?>" />
         </label>             
            
            <Br />
            
         <label>
       
        <label>
            <input type="submit" class="button" name="enviar" value="Enviar" />
        </label>           
    </div>
</form> 
</div>
</body>
</html>

