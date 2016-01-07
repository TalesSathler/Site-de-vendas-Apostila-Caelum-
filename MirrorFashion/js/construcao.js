/*function mostraAlerta(){
	alert("ALERTA!!!!!");
}

var titulo = document.querySelector("#titulo");

titulo = mostraAlerta;*/

var controle = document.querySelector('.volta').onsubmit;

controle.onclick = confirm("Tem certeza que deseja sair?");

