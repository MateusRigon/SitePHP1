<?php 
	session_start();


	if (isset($_POST['sair'])) {
		unset($_SESSION['login']);
		header("location: login&cadastro.php");
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
     		 <!-- mostra entrar caso usuario não estiver logado -->
		     	 <?php if (empty($_SESSION['login'])) { ?>
		     		 	 <nav id="navsemlogin" class="navbar navbar-expand-lg navbar-light d-flex justify-content-end">
		  					<h2>WoWClasses</h2>
				  		   	<select onchange="checkClass(event)" id="inputState" class="form-control">
				        		<option selected>Buscar</option>
				        		<option value="1">Guerreiro</option>
				        		<option value="2">Caçador</option>
				        		<option value="3">Sacerdote</option>
				        		<option value="4">Xamã</option>
				        		<option value="5">Bruxo</option>
				        		<option value="6">Druida</option>
				        		<option value="7">Paladino</option>
				        		<option value="8">Ladino</option>
				        		<option value="9">Cavaleiro da morte</option>
				        		<option value="10">Mago</option>
				        		<option value="11">Monge</option>
				        		<option value="12">Caçador de demônios</option>
				     		 </select>
						<div>
					 	 <div id="menuEntrar">
					   		 <ul class="navbar-nav mr-auto">
					     		 <li class="nav-item dropdown">
					       		 <a class="nav-link dropdown-toggle" href="#" role="button">Entrar</a>
					     	 </li>
		  					</div>
						</div>
					</nav>
					<?php
					} ?>
			<!-- mostra minha conta caso login efetuado -->
			<?php if (isset($_SESSION['login'])):?>
				<nav id="navlogin" class="navbar navbar-expand-lg navbar-light d-flex justify-content-end">
  					<h2>WoWClasses</h2>
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

			 	 	<div id="usuario">
			   		 <ul class="navbar-nav mr-auto">
			     		 <li class="nav-item dropdown">
			       		 <a class="nav-link dropdown-toggle" href="#" id="userlogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        	  Minha conta
			       		 </a>
			     	  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			     	  	<?php echo $_SESSION['login']; ?>
			       	   <form method="POST">
							<input id="sair" type="submit" name="sair" value="sair">
						</form>
			       	   
			      	  </div>
			     	 </li>
  					</div>
  					</nav>
				<?php endif ?>
	</div>
</div>
			<!-- imagem -->
			<div class="row" id="slides">
				<div class="mySlides col-lg-12 col-sm-12 col-6">
				<img id="imagem" class="img-fluid">
				</div>
			</div>	
			<div id="dots">
			  <span id="dot1" class="dot"></span> 
			  <span id="dot2" class="dot"></span> 
			  <span id="dot3" class="dot"></span>
			  <span id="dot4" class="dot"></span> 
			</div>
			<!-- navbar secundaria -->
			<div class="row">
			<div class="col-lg-12 col-sm-12 col-6">
				<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
  					<input type="button" value="Guerreiro" onclick="guerreiro()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Caçador" onclick="cacador()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Sacerdote" onclick="sacerdote()" class="classes">
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

			<!-- conteudo -->
			<div class="row">
				<div class="conteudo col-lg-12 col-sm-12 col-6">
					<div id="guerreiro">
					<p class="localizacao">Classes/Guerreiro</p>
					<h1>Guerreiro</h1>
					<div class="funcao">Tanque,Dano</div>
					<img id="imgguerreiro1" class="img-fluid" src="Imagens/guerreiro.jpg">
						<div class="div1">
						<h4>Senhores da Guerra</h4>
						<p>Guerras vêm e vão, mas há heróis que se dedicam a dominar todos os aspectos da arte da batalha sem descanso. Guerreiros combinam força, liderança e vasto conhecimento em armas e armaduras para criar o caos no campo de batalha. Alguns protegem a linha de frente com escudos, segurando o inimigo enquanto seus aliados os auxiliam com feitiços e disparos. Outros deixam o escudo de lado e liberam sua fúria na ameaça mais próxima contando com uma grande variedade de armas letais.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Tanque</p>
							<p>Dano Corpo a corpo</p>
							<p>Ira</p>
							</div>
							<img id="imgguerreiro2" class="img-fluid" src="Imagens/guerreiro2.jpg">
							
					</div>

				   	<div class="itens" id="cacador">
				   	<p class="localizacao">Classes/Caçador</p>
					<h1>Caçador</h1>
					<div class="funcao">Dano Físico à Distância</div>
					<img id="imgcacador1" class="img-fluid" src="Imagens/cacador3.jpg">
					<div class="div1">
						<h4>Tormentos Inveitáveis</h4>
						<p>Desde cedo, o chamado das selvas incita alguns aventureiros a deixarem a comodidade de seus lares para adentrarem o impiedoso mundo selvagem. Aqueles que sobrevivem acabam se tornando caçadores. Senhores de seu domínio, os caçadores são capazes de deslizar como fantasmas por entre as árvores e colocar armadilhas no caminho de seus inimigos.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Ajudantes</p>
							<p>Dano de Longo Alcance</p>
							<p>Dano Corpo a Corpo</p>
							<p>Por Si Só</p>
							</div>
							<img id="imgcacador2" class="img-fluid" src="Imagens/cacador1.jpg">
					</div>

					<div class="itens" id="sacerdote">
					<p class="localizacao">Classes/Sacerdote</p>
					<h1>Sacerdote</h1>
					<div class="funcao">Cura, Dano Mágico à Distância</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/sacerdote1.jpg">
						<div class="div1">
						<h4>Invocadores da Luz e das Trevas</h4>
						<p>Os sacerdotes são devotos da espiritualidade e expressam sua resoluta fé ao prestar serviços para o povo. Há milhares de anos, estes indivíduos abandonam os confins de seus templos e todo o conforto para apoiar seus aliados em terras devastadas pela guerra. Nenhum herói questiona os valores da ordem dos sacerdotes no meio de uma terrível batalha.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Cura</p>
							<p>Dano de Longo Alcance</p>
							<p>Palavras de Poder</p>
							<p>Controle mental</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/sacerdote2.jpg">	
					</div>			
					
			</div>
		</div>





			<div class="user">
				<button onclick="location.href='login&cadastro.php'" id="log">Login/Cadastrar</button>
			</div>




							
			
		</div>
	</div>







	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="JS/wowpedia.js"></script>
</body>
</html>