<?php 
	// Conexão com banco de dados MySQL
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$db = "cadastro2";
	$conexao = mysqli_connect($hostname,$user,$password,$db);
	
	// Retorna um alerta caso ocorra erro na conexão
	if (!$conexao) {
		echo"Falha na conexão com banco de dados!";
	}
 ?>