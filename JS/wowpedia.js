// botões de classes
function guerreiro() {
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#guerreiro").show("slow");
	$("#cacador").hide("slow");
	$("#sacerdote").hide("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#druida").hide("slow");
	$("#paladino").hide("slow");
	$("#ladino").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function cacador() {
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#cacador").show("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#guerreiro").hide("slow");
	$("#sacerdote").hide("slow");
	$("#druida").hide("slow");
	$("#paladino").hide("slow");
	$("#ladino").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function sacerdote(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#sacerdote").show("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#druida").hide("slow");
	$("#paladino").hide("slow");
	$("#ladino").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function xama(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#xama").show("slow");
	$("#bruxo").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#druida").hide("slow");
	$("#paladino").hide("slow");
	$("#ladino").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function bruxo(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#bruxo").show("slow");
	$("#druida").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#paladino").hide("slow");
	$("#ladino").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function druida(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#druida").show("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#paladino").hide("slow");
	$("#ladino").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function paladino(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#paladino").show("slow");
	$("#druida").hide("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#ladino").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function ladino(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#ladino").show("slow");
	$("#paladino").hide("slow");
	$("#druida").hide("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function cavaleiro(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#cavaleiro").show("slow");
	$("#ladino").hide("slow");
	$("#paladino").hide("slow");
	$("#druida").hide("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#mago").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
}
function mago(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#mago").show("slow");
	$("#ladino").hide("slow");
	$("#paladino").hide("slow");
	$("#druida").hide("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#monge").hide("slow");
	$("#demonhunter").hide("slow");
	$("#cavaleiro").hide("slow");
}
function monge(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#monge").show("slow");
	$("#ladino").hide("slow");
	$("#paladino").hide("slow");
	$("#druida").hide("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#demonhunter").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#mago").hide("slow");
}
function demonhunter(){
	if ($(window).scrollTop() == 0){window.scroll(0,700);}
	$("#demonhunter").show("slow");
	$("#ladino").hide("slow");
	$("#paladino").hide("slow");
	$("#druida").hide("slow");
	$("#bruxo").hide("slow");
	$("#xama").hide("slow");
	$("#sacerdote").hide("slow");
	$("#cacador").hide("slow");
	$("#guerreiro").hide("slow");
	$("#cavaleiro").hide("slow");
	$("#monge").hide("slow");
	$("#mago").hide("slow");
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
		return xama();	
	}
	if (event.target.value == 5) {
		return bruxo();	
	}   
	if (event.target.value == 6) {
		return druida();	
	}
	if (event.target.value == 7) {
		return paladino();	
	}  
	if (event.target.value == 8) {
		return ladino();		
	}  
	if (event.target.value == 9) {
		return cavaleiro();		
	}  
	if (event.target.value == 10) {
		return mago();		
	}
	if (event.target.value == 11) {
		return monge();		
	}  
	if (event.target.value == 12) {
		return demonhunter();		
	}       
}
