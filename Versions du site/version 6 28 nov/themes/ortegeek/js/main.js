/**
* NATIVE................Native Javascript
* JQUERY................jQuery
*/





/*------------------------------------*\
	#NATIVE
\*------------------------------------*/
var aHref = document.querySelectorAll("a[href='#']");
for(i = 0; i < aHref.length; i++) {
	aHref[i].onclick = function(e) { e.preventDefault(); };
}

var aExternal = document.querySelectorAll("a[rel~=external]");
for(i = 0; i < aExternal.length; i++) {
	aExternal[i].onclick = function(e) {
		e.preventDefault();
		if(this.href)
			window.open(this.href);
	};
}

var aLightbox = document.getElementsByClassName("lightbox");
for(i = 0; i < aLightbox.length; i++) {
	aLightbox[i].onclick = function(e) {
		e.preventDefault();
		openLightbox(this);
	};
}

function openLightbox(selector) {
	var lightbox = document.createElement("div");
	lightbox.id = "container-lightbox";
	lightbox.className = lightbox.className+"horizontal";

	var vertical = document.createElement("div");
	vertical.className = vertical.className+"vertical";
	lightbox.appendChild(vertical);

	var img = document.createElement("img");
	img.src = selector.href;
	vertical.appendChild(img);

	document.body.appendChild(lightbox);

	document.getElementById("container-lightbox").onclick = function(e) {
		removeLightbox();
	};
}

function removeLightbox() {
	var remove = document.getElementById("container-lightbox");
	document.body.removeChild(remove);
}

function toggleFullScreen() {
	if (!document.fullscreenElement &&    // alternative standard method
	!document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
		if (document.documentElement.requestFullscreen) {
			document.documentElement.requestFullscreen();
		} else if (document.documentElement.mozRequestFullScreen) {
			document.documentElement.mozRequestFullScreen();
		} else if (document.documentElement.webkitRequestFullscreen) {
			document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
		}
	} else {
		if (document.cancelFullScreen) {
			document.cancelFullScreen();
		} else if (document.mozCancelFullScreen) {
			document.mozCancelFullScreen();
		} else if (document.webkitCancelFullScreen) {
			document.webkitCancelFullScreen();
		}
	}
}





/*------------------------------------*\
	#JQUERY
\*------------------------------------*/
$('div.burger').click(function() {
	if( !$(this).hasClass('open') ){ openMenu(); }
	else { closeMenu(); }
});
/*
$('*:not(".menu-container")').click(function(e) {
	e.preventDefault();
	closeMenu();
});
*/
function openMenu() {
	$('div.circle').addClass('expand');
	$('div.menu-container, div.burger').addClass('open');
	$('div.x, div.y, div.z').addClass('collapse');
	$('.menu li').addClass('animate');

	setTimeout(function(){
		$('div.y').hide();
		$('div.x').addClass('rotate30');
		$('div.z').addClass('rotate150');
	}, 70);

	setTimeout(function(){
		$('div.x').addClass('rotate45');
		$('div.z').addClass('rotate135');
	}, 140);
}

function closeMenu() {
	$('div.circle').removeClass('expand');
	$('div.menu-container, div.burger').removeClass('open');
	$('.menu li').removeClass('animate');
	$('div.x').removeClass('rotate45').addClass('rotate30');
	$('div.z').removeClass('rotate135').addClass('rotate150');

	setTimeout(function(){
		$('div.x').removeClass('rotate30');
		$('div.z').removeClass('rotate150');
	}, 35);

	setTimeout(function(){
		$('div.y').show();
		$('div.x, div.y, div.z').removeClass('collapse');
	}, 70);
}
