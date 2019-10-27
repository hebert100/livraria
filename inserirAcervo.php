<?php
    include_once("conexao.php");  
 
    //criando as variavies e recebendo da tela
    $editora = $_POST ['editora'];
    $titulo = strtoupper($_POST['titulo']);
    $autor = strtoupper($_POST['autor']);
    $ano = $_POST['ano'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];
    
  
    //cria a query para Insert ou Select ou Alter table ou Drop;
    $sql = "INSERT INTO acervo (id, idEditora, titulo, autor, ano, preco, quantidade, tipo)  VALUES (NULL, '$editora', '$titulo', '$autor', '$ano', '$preco', '$quantidade', '$tipo')";
 
    //Aqui faz a execuçao da Query acima.
    mysqli_query($conn, $sql);
    
    	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
 
?>

