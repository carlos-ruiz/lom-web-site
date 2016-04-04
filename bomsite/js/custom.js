$(document).on("mouseover",".thumbnails img", function(){
	modelo = $(this).parent().data('model');
	imagen = $(this).data('image');
	imgHtml = $('#' + modelo + '_current');
	tipoImagen = $(this).data('type');
	actual = imgHtml.attr('src');
	nuevo = actual.substring(0, actual.indexOf('mediano'));
	console.log(actual + ' - ' + nuevo);
	if(tipoImagen === 'zapato')
		nuevo += 'mediano/' + modelo + '/' + imagen + '.png';
	else
		nuevo += 'mediano/suelas/' + imagen + '.png';
	imgHtml.attr('src', nuevo);
	console.log(modelo+' - '+imagen+' - '+nuevo);
});