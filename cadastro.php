<link rel="stylesheet" type="text/css" href="CSS/erros.css">
<?php
		session_start();

		require_once('db.php');
	

		if(isset($_POST['pronto'])){
		$login = $_POST['login'];
		$senha = md5($_POST['senha']);
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];

		//Verifica o login no banco de dados 
		$pegalogin = mysqli_query($conexao, "SELECT * FROM usuarios WHERE (login = '$login')");
		if (mysqli_num_rows($pegalogin) == 1) {
		 //Retorna erro caso o login já exista 
		?>	
		 <div class="erro">
		 	Usuário já existente! <input type="button" id="recuperarSenha" value="Recuperar Senha">
		 </div>

		<?php
		}else {
			//Cadastra login e senha no banco de dados
			$insert = "INSERT INTO usuarios(login,senha,email,telefone) VALUES ('$login','$senha','$email','$telefone')";  
			$salvar = mysqli_query($conexao,$insert);
			if ($salvar) {
			setcookie("login",$login);
			$_SESSION['login'] = $login;
		    $_SESSION['success'] = "voce esta logado";	
			// setcookie("login",$login);
		 	echo"<script language='javascript' type='text/javascript'>
		    alert('Usuário cadastrado com sucesso!');window.location.
		    href='index.php'</script>";
		    
			}	
       	}
 	  }
 	  	if(isset($_POST['entrar'])){
 	  		$senha = md5($_POST['senha']);
			$email = $_POST['email'];

 	  		$verifica = mysqli_query($conexao, "SELECT * FROM usuarios WHERE (email = '$email') AND (senha = '$senha')");	
 	  		
 	  		if(mysqli_num_rows($verifica) <= 0) {
 	  			//erro caso login ou senha n existam no db
 	  		?>
 	  			<div class="erro">
 	  				Login e/ou senha incorretos! <input type="button" id="recuperarSenha" value="Recuperar Senha">
 	  			</div>
 	  		<?php
 	  		}else{
 	  			$_SESSION['login'] = $email;
		    	$_SESSION['success'] = "voce esta logado";	
 	  			header("location: index.php");

 	  		}


 	  	}

		     // or

		     // header("location: index.php");
 ?>
