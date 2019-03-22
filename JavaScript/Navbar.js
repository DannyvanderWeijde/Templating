var home = document.getElementById("item1");
var overMij = document.getElementById("item2");
var werk = document.getElementById("item3");
var skills = document.getElementById("item4");
var contact = document.getElementById("item5");

function startItems(){
	document.getElementById("navBarName").style.top = "-6vh";
	document.getElementById("navBarName").style.left = "-1vw";
	home.style.top = "-5vh";
	overMij.style.top = "-6vh";
	werk.style.top = "-6vh";
	skills.style.top = "-6vh";
	contact.style.top = "-5vh";
	document.getElementById("navBarName").style.display = "block";
	home.style.display = "block";
	overMij.style.display = "block";
	werk.style.display = "block";
	skills.style.display = "block";
	contact.style.display = "block";
	setTimeout(homeDrop, 200);
}

function homeDrop(){
	home.style.top = "0";
	home.style.transition = "0.5s";
	setTimeout(overMijDrop, 200);
	setTimeout(nameBarDrop, 200);
}

function nameBarDrop(){
	document.getElementById("navBarName").style.left = "-0.9vw";
	document.getElementById("navBarName").style.top = "2.5vh";
	setTimeout(nameBarMove1, 750);
}

function nameBarMove1(){
	document.getElementById("navBarName").style.left = "-0.5vw";
	document.getElementById("navBarName").style.top = "1.5vh";
	setTimeout(nameBarMove2, 200);
}

function nameBarMove2(){
	document.getElementById("navBarName").style.top = "2.5vh";
	setTimeout(nameBarMove3, 200);
}

function nameBarMove3(){
	document.getElementById("navBarName").style.left = "-0.1vw";
	document.getElementById("navBarName").style.top = "0.5vh";
	setTimeout(nameBarMove4, 200);
}

function nameBarMove4(){
	document.getElementById("navBarName").style.left = "0";
	document.getElementById("navBarName").style.top = "0";
	document.getElementById("navBarName").style.transition = "0.5s";
}

function overMijDrop(){
	overMij.style.top = "0";
	overMij.style.transition = "0.5s";
	setTimeout(werkDrop, 200);
}

function werkDrop(){
	werk.style.top = "0";
	werk.style.transition = "0.5s";
	setTimeout(skillsDrop, 200);
}

function skillsDrop(){
	skills.style.top = "0";
	skills.style.transition = "0.5s";
	setTimeout(contactDrop, 200);
}

function contactDrop(){
	contact.style.top = "0";
	contact.style.transition = "0.5s";
}

startItems();

//menu error

function menuButton(){
	if (document.getElementById("navbarSupportedContent").classList.contains("show")) {
		document.getElementById("navbarSupportedContent").classList.remove("show");
	}
}

// Mogelijke oplossing: https://codepen.io/lkp/pen/bdPbQx.