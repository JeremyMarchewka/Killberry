//almacenar slider en una variable
var slider = $('#slider');
//almacenar botones
var siguiente = $('#btn-next');
var anterior = $('#btn-prev');

//mover ultima imagen al primer lugar
$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
//mostrar la primera imagen con un margen de -100%
slider.css('margin-left', '-'+100+'%');

function moverD() {
	slider.animate({
		marginLeft:'-'+200+'%'
	} ,700, function(){
		$('#slider .slider__section:first').insertAfter('#slider .slider__section:last');
		slider.css('margin-left', '-'+100+'%');
	});
}

function moverI() {
	slider.animate({
		marginLeft:0
	} ,700, function(){
		$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
		slider.css('margin-left', '-'+100+'%');
	});
}

function autoplay() {
	interval = setInterval(function(){
		moverD();
	}, 5000);
}
siguiente.on('click',function() {
	moverD();
	clearInterval(interval);
	autoplay();
});

anterior.on('click',function() {
	moverI();
	clearInterval(interval);
	autoplay();
});


autoplay();



document.addEventListener('DOMContentLoaded', function () {
	window.onscroll = function (ev) {
		document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
			"cInvisible";
	};
});

$('#sidebarCollapse').click(function (e) {
	e.preventDefault();
	$('#sidebar').toggleClass('active');
})

function openModal() {
	document.getElementById("modal").style.top = "0px";
}

function closeModal() {
	document.getElementById("modal").style.top = "-780px";
}


