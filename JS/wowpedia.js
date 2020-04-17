// botões de classes
function guerreiro() {
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#guerreiro").show("slow");
	$("#cacador").hide("slow");
	$("#sacerdote").hide("slow")
}
function cacador() {
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#cacador").show("slow");
	$("#guerreiro").hide("slow");
	$("#sacerdote").hide("slow");
}
function sacerdote(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#sacerdote").show("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
}
// slideShow automático
var intervalo = 3000;

function slide1(){
	$("#imagem").attr("src", "Imagens/foto1.jpg");
	$("#dot1").addClass("active");
	$("#dot4").removeClass("active");
	setTimeout("slide2()",intervalo);
}

function slide2(){
	$("#imagem").attr("src", "Imagens/foto2.jpg");
	$("#dot2").addClass("active");
	$("#dot1").removeClass("active");
	setTimeout("slide3()",intervalo);
}

function slide3(){
	$("#imagem").attr("src", "Imagens/foto3.jpg");
	$("#dot3").addClass("active");
	$("#dot2").removeClass("active");
	setTimeout("slide4()",intervalo);
}

function slide4(){
	$("#imagem").attr("src", "Imagens/foto4.jpg");
	$("#dot4").addClass("active");
	$("#dot3").removeClass("active");
	setTimeout("slide1()",intervalo);
}
// botão entrar
$(document).ready(function(){
  $("#menuEntrar").hover(function(){
    $(".user").css("display", "block");
    }, function(){
    $(".user").css("display", "none");
  });
});

$(document).ready(function(){
  $(".user").hover(function(){
    $(this).css("display", "block");
    }, function(){
    $(this).css("display", "none");
  });
});

$('#menuEntrar').on('click', function() {
  $('.user').toggle();
});
	
// navbar "Buscar"		
function checkClass(event){
	if (event.target.value == 1) {
		return guerreiro();
	}
	if (event.target.value == 2) {
		return cacador();
	}
	if (event.target.value == 3) {
		return sacerdote();
	}
	if (event.target.value == 4) {
			
	}
	if (event.target.value == 5) {
			
	}   
	if (event.target.value == 6) {
			
	}
	if (event.target.value == 7) {
			
	}  
	if (event.target.value == 8) {
			
	}  
	if (event.target.value == 9) {
			
	}  
	if (event.target.value == 10) {
			
	}
	if (event.target.value == 11) {
			
	}  
	if (event.target.value == 12) {
			
	}       
}
