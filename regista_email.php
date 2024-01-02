<?php 

	$conexao = mysqli_connect("localhost", "root", "", "facilitaso");

	if(!$conexao){
		echo "Erro ao conectar com  banco de dados";
	}

	
	$email = $_POST['email'];


	$sql_inscricao = " INSERT INTO inscricao( email ) VALUES( '$email' ) ";

	mysqli_query($conexao, $sql_inscricao);

	echo  header("Location: index.php") ;
	mysqli_close($conexao);

?>