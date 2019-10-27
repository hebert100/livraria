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
	
<form action="inserirAcervo.php" name="frmAcervo" method="post" id="formulario" >
    <div class="box"> 
		<h1>Cadastro de Livro</h1>
        
		<label>
            <select class="select" name="editora">
				<option>Selecione a editora..</option>
				<?php
					$sql = "SELECT * FROM editora";
					$resultado = mysqli_query($conn, $sql);
					while ($rows = mysqli_fetch_assoc($resultado)){ ?>
						<option value="<?php echo $rows['id']; ?>"><?php echo $rows['nome']; ?></option> <?php
					}
				?>
			</select>
        </label>
        <br>
	    <label>
            <input type="text" class="input_text" name="titulo" placeholder="Digite o titulo"/>
         </label>
  <Br />
        <label>
            <input type="text" class="input_text" name="autor" id="autor" placeholder="Digite o autor"/>
        </label>
  <Br />
        <label>
            <input class="input_text" name="ano" id="ano" placeholder="Digite o ano" />
         </label>  
         <Br />
         <label>
            <input class="input_text" name="preco" id="preco" placeholder="Digite o preço"/>
         </label>
         <Br />  
            <input class="input_text" name="quantidade" id="quantidade" placeholder="Digite a quantidade"/>
         </label> 
         <Br />             
         <label>
            <input class="input_text" name="tipo" id="tipo" placeholder="Digite o codigo do tipo"/>
         </label>             
            
            <Br />
            
         <label>
            <input type="reset" class="button" name="limpar" value="limpar" />
        </label>  
        
        <label>
            <input type="submit" class="button" name="enviar" value="Enviar" />
        </label>           
    </div>
</form> 
</div>

</body>
</html>

