<?php
    include_once("conexao.php");  
 
    //criando as variavies e recebendo da tela
    $id = $_POST['id']; echo $id;
    $editora = $_POST['editora'];
    $titulo = strtoupper($_POST['titulo']);
    $autor = strtoupper($_POST['autor']);
    $ano = $_POST['ano'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];
    

  
    //cria a query para Insert ou Select ou Alter table ou Drop;

    $sql = "UPDATE acervo SET titulo = '$titulo', autor = '$autor', ano = $ano, preco = $preco, quantidade = $quantidade, tipo = $tipo WHERE id = $id";
    echo $sql;
 
    //Aqui faz a execuçao da Query acima.
    mysqli_query($conn, $sql);
    
    	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"Livro atualizado com sucesso!!.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"Livro nao foi alterado.\");
					</script>
				";	
			}
 
?>

