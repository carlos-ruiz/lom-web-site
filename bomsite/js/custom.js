$(window).load(function() {
	alto_portada = 0;
	$('.flipbook-sheet').each(function(){
		alto = $(this).height();
		if (alto > alto_portada) {
			alto_portada = alto;
		}
	});
	$('.portada').height(alto_portada);
	$('.flipbook-sheet').height(alto_portada);

	$('.zoomContainer').addClass('hidden');
	$('.instruccion').show();
});

function loadApp() {
	width = $('#content').width();
	height = $('.flipbook').height();
	sheetNumber = $('.flipbook .flipbook-sheet').length;
	height = height/sheetNumber + 50;
	// Create the flipbook
	$('.flipbook').turn({
	// Width
	width:width,

	// Height
	height:height,

	// Elevation
	elevation: 50,

	// Enable gradients
	gradients: true,

	// Auto center this flipbook
	autoCenter: true
	});
}

// Load the HTML4 version if there's not CSS transform
yepnope({
	test : Modernizr.csstransforms,
	yep: ['js/turnjs/lib/turn.min.js'],
	nope: ['js/turnjs/lib/turn.html4.min.js'],
	complete: loadApp
});

$(document).on("mouseover",".images-container>img", function(){
	$('.zoomContainer').removeClass('hidden');
});

$(document).on("mouseout",".zoomContainer", function(){
	$('.zoomContainer').addClass('hidden');
});

$(document).on("click",".instruccion", function(){
	$('.instruccion').hide(500);
});
