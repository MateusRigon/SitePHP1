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
			<div class="col-lg-12">			
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
				<div class="mySlides col-lg-12">
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
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
  					<input type="button" value="Guerreiro" onclick="guerreiro()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Caçador" onclick="cacador()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Sacerdote" onclick="sacerdote()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Xamã" onclick="xama()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Bruxo" onclick="bruxo()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Druida" onclick="druida()" class="classes">
  					<div class="linha"></div>
  					<input type="button" value="Paladino" onclick="paladino()" class="classes">
				</nav>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
	  					<input type="button" value="Ladino" onclick="ladino()" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Cavaleiro da Morte" onclick="cavaleiro()" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Mago" onclick="mago()" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Monge" onclick="monge()" class="classes">
	  					<div class="linha"></div>
	  					<input type="button" value="Caçador de Demônios" onclick="demonhunter()" class="classes">
						</nav>
				</div>
			</div>

			<!-- conteudo -->
			<div class="row">
				<div class="conteudo col-lg-12">
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

					<div class="itens" id="xama">
				   	<p class="localizacao">Classes/Xamã</p>
					<h1>Xamã</h1>
					<div class="funcao">Cura, Dano</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/xama1.jpg">
					<div class="div1">
						<h4>Adeptos dos Elementos</h4>
						<p>Os xamãs são os guias espirituais, não do poder divino, mas das forças dos elementos. Diferentes de outros místicos, os xamãs entram em comunhão com forças que não são sempre benevolentes. Os elementos são caóticos e, livres, constantemente entram em choque uns com os outros em um ciclo de fúria primitiva interminável. É o chamado do xamã que traz equilíbrio a este caos. Atuando como mediadores entre a terra, fogo, água e ar, os xamãs evocam totens que guiam os elementos a ajudarem seus aliados e castigar aqueles que os ameaçam.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Cura</p>
							<p>Dano de Longo Alcance</p>
							<p>Dano Corpo a Corpo</p>
							<p>Totens</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/xama2.jpg">
					</div>

					<div class="itens" id="bruxo">
				   	<p class="localizacao">Classes/Bruxo</p>
					<h1>Bruxo</h1>
					<div class="funcao">Dano</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/bruxo1.jpg">
					<div class="div1">
						<h4>Canalizadores de Poder Proibido</h4>
						<p>Frente a poderes demoníacos, a maioria dos heróis vê a morte. Bruxos veem apenas oportunidades. Dominação é seu objetivo e o caminho encontrado para isso está no controle das artes sombrias. Para auxiliá-los em seus planos, tais feiticeiros evocam ajudantes monstruosos para lutarem ao seu lado. No início da jornada, os bruxos contam apenas com diabretes sob seu comando, mas com o tempo novos ajudantes entram em cena, como súcubos sedutoras, emissários do caos e vis selvagens para acabar com qualquer ameaça.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Ajudantes</p>
							<p>Dano de Longo Alcance</p>
							<p>Evocações</p>
							<p>Recursos Demoníacos</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/bruxo2.png">
					</div>

					<div class="itens" id="druida">
				   	<p class="localizacao">Classes/Druida</p>
					<h1>Druida</h1>
					<div class="funcao">Tanque, Cura, Dano</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/druida1.jpg">
					<div class="div1">
						<h4>Amigos Inseparáveis</h4>
						<p>Os druidas tiram proveito dos vastos poderes da natureza para preservar o equilíbrio e proteger a vida. Um druida experiente pode extrair a energia bruta da natureza, descarregando fúria celestial contra seus inimigos de grandes distâncias, imobilizando-os com raízes encantadas ou retardá-los em ciclones impiedosos.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Transformação</p>
							<p>Dano Corpo a Corpo e Longo Alcance</p>
							<p>Cura</p>
							<p>Tanque</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/druida3.jpg">
					</div>
					
					<div class="itens" id="paladino">
				   	<p class="localizacao">Classes/Paladino</p>
					<h1>Paladino</h1>
					<div class="funcao">Tanque, Cura, Dano Corpo a Corpo</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/paladino1.jpg">
					<div class="div1">
						<h4>Paradigmas da Justiça</h4>
						<p>Este é o dever do paladino: proteger os fracos, trazer justiça aos injustos e exterminar o mal nos confins mais sombrios do mundo. Estes guerreiros sagrados estão equipados com armaduras de placas para enfrentar os inimigos mais perigosos e são adeptos da benção da Luz que lhes permite curar feridas, e em alguns casos, ressuscitar os mortos.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Tanque</p>
							<p>Dano Corpo a Corpo</p>
							<p>Benção e Auras</p>
							<p>Cura</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/paladino2.jpg">
					</div>


					<div class="itens" id="ladino">
				   	<p class="localizacao">Classes/Ladino</p>
					<h1>Ladino</h1>
					<div class="funcao">Dano</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/ladino1.jpg">
					<div class="div1">
						<h4>Gatunos Espreitadores</h4>
						<p>Para os ladinos, o único código que existe é o contrato e sua honra pode ser comprada com ouro. Livres de escrúpulos, estes mercenários empregam o uso de táticas brutais e eficientes. Assassinos letais e mestres da furtividade, os ladinos aproximam-se de seus alvos pela retaguarda, perfuram um órgão vital e desaparecem nas sombras antes da vítima cair no chão.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Furtivo</p>
							<p>Dano Corpo a Corpo</p>
							<p>Evasão</p>
							<p>Combos</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/ladino2.jpg">
					</div>

					<div class="itens" id="cavaleiro">
				   	<p class="localizacao">Classes/Cavaleiro da Morte</p>
					<h1>Cavaleiro da Morte</h1>
					<div class="funcao">Tanque, Dano Corpo a Corpo</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/cavaleiro2.jpg">
					<div class="div1">
						<h4>Arautos da Perdição</h4>
						<p>Quando o Lich Rei perdeu o controle dos cavaleiros da morte, seus campeões de outrora buscaram vingança pelos horrores cometidos sob comando dele. Ao obtê-la, os cavaleiros da morte se encontraram sem uma causa e sem um lar. Um por um eles se infiltraram no mundo dos vivos em busca de um novo propósito.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Tanque</p>
							<p>Dano Corpo a Corpo</p>
							<p>Forjar Runas</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/cavaleiro1.jpg">
					</div>

					<div class="itens" id="mago">
				   	<p class="localizacao">Classes/Mago</p>
					<h1>Mago</h1>
					<div class="funcao">Dano Mágico à Distância</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/mago1.jpg">
					<div class="div1">
						<h4>Mestres do Tempo e do Espaço</h4>
						<p>Estudantes privilegiados com intelecto aguçado e disciplina inabalável podem seguir o caminho do mago. A magia arcana que os magos têm à sua disposição é igualmente incrível como perigosa e por isso seus segredos são revelados apenas para os praticantes mais devotados. Para impedir qualquer tipo de interferência com o lançamento de suas magias, os magos usam armaduras de tecido, porém seus escudos arcanos e encantamentos lhes fornecem proteção adicional. Para manter os inimigos à distância, os magos são capazes de evocar rajadas de fogo para incinerar alvos e causar erupções em áreas inteiras para colocar grupos inteiros em chamas.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Dano de Longo Alcance</p>
							<p>Dano em Área</p>
							<p>Controle</p>
							<p>Teletransporte</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/mago2.jpg">
					</div>

					<div class="itens" id="monge">
				   	<p class="localizacao">Classes/Monge</p>
					<h1>Monge</h1>
					<div class="funcao">Tanque, Cura, Dano Corpo a Corpo</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/monge1.jpg">
					<div class="div1">
						<h4>Zens Encrenqueiros</h4>
						<p>Quando os pandarens foram dominados pelos mogu, séculos atrás, os monges resgataram a esperança em um futuro que parecia sombrio. Com armas fora de seu alcance, os pandarens escravizados passaram a praticar a concentração de chi e desenvolveram técnicas de combate sem armas. Quando a oportunidade para iniciar a revolução apareceu, eles já estavam treinados para derrubar a força opressora.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Tanque</p>
							<p>Dano Corpo a Corpo</p>
							<p>Cura</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/Monge2.jpg">
					</div>

					<div class="itens" id="demonhunter">
				   	<p class="localizacao">Classes/Caçador de Demônios</p>
					<h1>Caçador de Demônios</h1>
					<div class="funcao">Dano Corpo a Corpo, Tanque</div>
					<img id="imgsacerdote1" class="img-fluid" src="Imagens/demon1.jpg">
					<div class="div1">
						<h4>Predadores Implacáveis</h4>
						<p>Os Caçadores de Demônios, discípulos de Illidan Tempesfúria, representam um legado sombrio que amedronta tanto os inimigos quanto os aliados. Os Illidari utilizam magia caótica e vil — energias que há muito ameaçam o mundo de Azeroth — pois creem que ela é essencial para derrotar a Legião Ardente. Ao usar os poderes dos demônios que matam, os caçadores desenvolvem características demoníacas que incutem temor e desprezo nos outros elfos.</p>
						</div>
							<div id="caracteristicas">
							<h4>Características</h4>
							<p>Metamorfose</p>
							<p>Dano Corpo a Corpo</p>
							<p>Tanque</p>
							<p>Visão Espectral</p>
							</div>
							<img id="imgsacerdote2" class="img-fluid" src="Imagens/demon2.jpg">
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