function guerreiro() {
	$("#guerreiro").css({display: "block"});
	$("#cacador").css({display: "none"});
}
function cacador() {
	$("#cacador").css({display: "block"});
	$("#guerreiro").css({display: "none"});
}

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

// $(document).ready(function(){
//   $("#menuEntrar").hover(function(){
//     $(".user").css("display", "block");
//     }, function(){
//     $(".user").css("display", "none");
//   });
// });

$('#navbarDropdown').on('click', function() {
  $('.user').toggle();
});