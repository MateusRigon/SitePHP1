<?php 
	session_start();


	if (isset($_POST['sair'])) {
		unset($_SESSION['login']);
		header("location: index.php");
		session_destroy();
	}
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/inicial.css">
		<title>Pagina inicial</title>
</head>
<body onload="slide1()">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-6">
				<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-end">
					<?php if (isset($_SESSION['login'])):?>
				<div>
			 	 <div id="usuario">
			   		 <ul class="navbar-nav mr-auto">
			     		 <li class="nav-item dropdown">
			       		 <a class="nav-link dropdown-toggle" href="#" id="userlogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        	  <?php echo $_SESSION['login']; ?>
			       		 </a>
			     	  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			       	   <form method="POST">
							<input id="sair" type="submit" name="sair" value="sair">
						</form>
			       	   
			      	  </div>
			     	 </li>
  					</div>
				</div>
				<?php endif ?>
  					<h2>WOWPedia</h2>
	
  		   	<select id="inputState" class="form-control">
        		<option selected>Buscar</option>
        		<option onclick="guerreiro()">Guerreiro</option>
        		<option>Caçador</option>
        		<option>Sacerdote</option>
        		<option>Xamã</option>
        		<option>Bruxo</option>
        		<option>Druida</option>
        		<option>Paladino</option>
        		<option>Ladino</option>
        		<option>Cavaleiro da morte</option>
        		<option>Mago</option>
        		<option>Monge</option>
        		<option>Caçador de demônios</option>
     		 </select>
     		 <!-- mostra entrar caso usuario não estiver logado -->
     		 <?php if (empty($_SESSION['login'])) { ?>
				<div>
			 	 <div id="menuEntrar">
			   		 <ul class="navbar-nav mr-auto">
			     		 <li class="nav-item dropdown">
			       		 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">Entrar</a>
			     	 </li>
  					</div>
				</div>
			<?php
			} ?>
		</nav>
	</div>
</div>
			<!-- imagem -->
			<div class="row" id="slides">
				<div class="mySlides col-lg-12 col-sm-12 col-6">
				<img id="imagem" class="img-fluid">
				</div>
			</div>	

			<!-- navbar secundaria -->
			<div class="row">
			<div class="col-lg-12 col-sm-12 col-6">
				<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">

  					<input type="button" value="Guerreiro" onclick="guerreiro()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Caçador" onclick="cacador()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Sacerdote" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Xamã" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Bruxo" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Druida" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Paladino" class="classes">
  					
				</nav>
	</div>
</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-6">
					<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
	  					<input type="button" value="Ladino" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Cavaleiro da morte" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Mago" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Monge" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Caçador de demonios" class="classes">
						</nav>
				</div>
			</div>

			<div class="conteudo">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-6">
					<div id="guerreiro">
						<h1>Guerreiro</h1>
					<p>dashusduahsdahhuadsuhsaduusdahuhusaushaduasdhuhusad
					sadhudsahusadhuhusadhusdauhshaduuhdas
					dsahusaduadssssssssssssssssssssssadshhudashusadhusadhu]
					</p>	
					</div>
				   	<div id="cacador">
					<h1>Caçador</h1>
					<p>dashusduahsdahhuadsuhsaduusdahuhusaushaduasdhuhusad
					sadhudsahusadhuhusadhusdauhshaduuhdas
					dsahusaduadssssssssssssssssssssssadshhudashusadhusadhu]
					</p>	
					</div>		

				</div>
			</div>
		</div>

<div id="dots">
  <span id="dot1" class="dot"></span> 
  <span id="dot2" class="dot"></span> 
  <span id="dot3" class="dot"></span>
  <span id="dot4" class="dot"></span> 
</div>

<div class="user">
	<button onclick="location.href='index.php'" id="log">Login/Cadastrar</button>
</div>






							
			
		</div>
	</div>







	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="JS/wowpedia.js"></script>
</body>
</html>