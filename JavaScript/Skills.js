var text = document.getElementById("text3");
var text2 = document.getElementById("text4");
var text3 = document.getElementById("text5");
var text4 = document.getElementById("text6");
var header = document.getElementById("header3");

function tekstAnimation(){
	text.style.opacity = "1";
	text.style.bottom = "0vh";
	text2.style.opacity = "1";
	text2.style.bottom = "0vh";
	text3.style.opacity = "1";
	text3.style.bottom = "0vh";
	text4.style.opacity = "1";
	text4.style.bottom = "0vh";
	header.style.opacity = "1";
	header.style.bottom = "0vh";
}

setTimeout(tekstAnimation, 2000);