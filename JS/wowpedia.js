// botões de classes
function guerreiro() {
	if ($(window).scrollTop() == 0){window.scroll(0,570);}
	$("#guerreiro").css("display", "block");
	$("#cacador").css("display", "none");
	$("#sacerdote").css("display", "none");
}
function cacador() {
	if ($(window).scrollTop() == 0){window.scroll(0,570);}
	$("#cacador").css("display", "block");
	$("#guerreiro").css("display", "none");
	$("#sacerdote").css("display", "none");
}
function sacerdote(){
	if ($(window).scrollTop() == 0){window.scroll(0,570);}
	$("#sacerdote").css("display", "block");
	$("#cacador").css("display", "none");
	$("#guerreiro").css("display", "none");
}
// slideShow automático
var intervalo = 3000;
var dot1 = document.getElementById('dot1');
var dot2 = document.getElementById('dot2');
var dot3 = document.getElementById('dot3');
var dot4 = document.getElementById('dot4');

function slide1(){
	document.getElementById("imagem").src="Imagens/foto1.jpg";
	dot1.classList.add("active");
	dot4.classList.remove("active");
	setTimeout("slide2()",intervalo);
}

function slide2(){
	document.getElementById("imagem").src="Imagens/foto2.jpg";
	dot2.classList.add("active");
	dot1.classList.remove("active");
	setTimeout("slide3()",intervalo);
}

function slide3(){
	document.getElementById("imagem").src="Imagens/foto3.jpg";
	dot3.classList.add("active");
	dot2.classList.remove("active");
	setTimeout("slide4()",intervalo);
}

function slide4(){
	document.getElementById("imagem").src="Imagens/foto4.jpg";
	dot4.classList.add("active");
	dot3.classList.remove("active");
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
	

