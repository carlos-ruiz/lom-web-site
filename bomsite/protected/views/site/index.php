<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<div>
				<div id="image_holder_x" style="height:300px;">
					<img id="product_image_x" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_tacon/Imagen.png"  >
				</div>
			</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
			<div>Hola mundo</div>
		</div>
	</div>
</div>


<script type="text/javascript">

	$( document ).ready(function() {
		//Lets create an instance of the viewer
		var presentation = new javascriptViewer($('#product_image_x'),{
			total_frames:10,
			target_id:'image_holder_x'
		});

		//Lets start the presentation
		presentation.start(); 
	});
function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

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
	yep: ['js/turnjs/lib/turn.js'],
	nope: ['js/turnjs/lib/turn.html4.min.js'],
	both: ['css/basic.css'],
	complete: loadApp
});

</script>