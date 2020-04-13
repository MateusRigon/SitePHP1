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
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-6">
				<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-end">
  					<h3>WOWPedia</h3>
	
  		   	 <form class="form-inline">
     			 <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
   			 </form>

   			 <div>
			  <div id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">

			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Entrar
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Login</a>
			          <a class="dropdown-item" href="#">Cadastrar</a>		  
			        </div>
			      </li>
  				</div>
			</div>
		</nav>
	</div>
</div>
			<!-- imagem -->
			<div class="row">
				<div id="imagem" class="col-lg-12 col-sm-12 col-6">
				<img class="img-fluid" src="Imagens/wow2.jpg">
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









				<?php 
				if (isset($_SESSION['success'])) : 

					echo $_SESSION['success'];
					unset($_SESSION['success']);
					
				?>
				<?php endif ?>
				

				<?php if (isset($_SESSION['login'])): ?>
					<?php echo $_SESSION['login']; ?>
					<form method="POST">
							<input  type="submit" name="sair" value="sair">
					</form>
				<?php endif ?>

							
			
		</div>
	</div>









	<script type="text/javascript" src="JS/wowpedia.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>