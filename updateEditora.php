<?php
    include_once("conexao.php");  
 
    //criando as variavies e recebendo da tela
    
    $nome = strtoupper($_POST['nome']);
    $id = $_POST['id'];

  
    //cria a query para Insert ou Select ou Alter table ou Drop;
    $sql = "UPDATE editora SET nome = '$nome'  WHERE id = $id";

 
    //Aqui faz a execuçao da Query acima.
    mysqli_query($conn, $sql);
    
    	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"Editora atualizada com sucesso!!.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"Editora nao foi atualizada.\");
					</script>
				";	
			}
 
?>

