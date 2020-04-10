<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/projeto.css">
  

    <title>Logon de usúario</title>
  </head>
  <body>
   
<div class="container">
	<div class="login" id="login1">
		<h1>Logon</h1>


			<!-- Formulário de login do usuário -->
			<div id="form" class="form-group">
				<form method="POST">
					<input class="ma" type="email" name="email" placeholder="Email" required>
					<br><br>
					<input class="ma" type="password" name="senha" placeholder="Senha" required>
					<br><br>
					<input type="submit" name="entrar" value="ENTRAR" class="btn  btn-lg submit">
					<br><br>
					<input onclick="irCadastro()" type="button" class="button" value="Ainda não é inscrito? Cadastre-se!"></p>
					</form>
			</div>	
	</div>

	<div class="cadastro" id="cad">
		<h1>Cadastrar</h1>


			<!-- Formulário de login do usuário -->
			<div id="form2" class="form-group">
				<form method="POST">
					<input class="ma"type="text" name="login" placeholder="Usuário" required>
					<br><br>
					<input class="ma" type="password" name="senha" placeholder="Senha" required>
					<br><br>
					<input class="ma" type="email" name="email" placeholder="Email" required>
					<br><br>
					<input class="ma" type="tel" name="telefone" placeholder="Telefone" required>
					<br><br>
					<input  type="submit" name="pronto" value="PRONTO" class="btn  btn-lg submit">
					<br><br>
					<input type="button" class="button" value="Cancelar" onclick="cancelar()" name="">
					</form>
			</div>	
	</div>
</div>
<?php 
	include_once 'cadastro.php';
 ?>



    <script type="text/javascript" src="JS/projetojs.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>