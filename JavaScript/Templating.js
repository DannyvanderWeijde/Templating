var foto = document.getElementById("werkFoto");
var text = document.getElementById("text");
var header = document.getElementById("header");

function fotoAnimation(){
	foto.style.opacity = "1";
	foto.style.right = "0vw";
}

function tekstAnimation(){
	text.style.opacity = "1";
	header.style.opacity = "1";
	text.style.bottom = "0vh";
	header.style.bottom = "0vh";
}

setTimeout(fotoAnimation, 1000);
setTimeout(tekstAnimation, 2000);