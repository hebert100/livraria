<?php
    include_once("conexao.php");  
 
    //criando as variavies e recebendo da tela
    $nome = strtoupper($_POST['nome']);
    
  
    //cria a query para Insert ou Select ou Alter table ou Drop;
    $sql = "INSERT INTO editora (id, nome)  VALUES (NULL, '$nome')";
 
    //Aqui faz a execuçao da Query acima.
    mysqli_query($conn, $sql);
    
    	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"Editora incluida com sucesso!!.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/livraria/index.php'>
					<script type=\"text/javascript\">
						alert(\"Editora nao foi incluida.\");
					</script>
				";	
			}
 
?>

