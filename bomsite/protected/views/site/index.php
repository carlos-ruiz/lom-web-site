<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<div class="flipbook-sheet portada">
				<div class="title align-center">
					<br/><br/><br/>
					<h1>Botas y Botines BOM</h1>
					<br/><br/><br/>
					<h3>Catálogo de zapatos</h3>
				</div>
				<br/><br/><br/>
				<div class="align-center">
					<img src="<?= Yii::app()->request->baseUrl ?>/images/logos/logo.png">
				</div>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<br/><br/>
					<div id="image_holder_1" data-num="1" class="image-holder col-sm-7 col-md-5 image-360">
						<img id="product_image_1" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_tacon/Imagen.png"  >
						<div class="align-center">
							<h3>Botín charro</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/botin_mil_rayas.png">
					</div>
					<div class="model-information col-sm-3 col-md-4">
						<p>Tallas: 15-25</p>
						<p>Colores: Negro y Café</p>
						<div class="colores">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/negro.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/miel.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/shedron.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/vino.png" width="30px">
						</div>
					</div>
				</div>
				<div class="row">
					<br/><br/>
					<div class="model-information align-right col-sm-3 col-md-4">
						<p>Tallas: 15-25</p>
						<p>Colores: Negro y Café</p>
					</div>
					<div id="image_holder_2" data-num="2" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_2" src="<?= Yii::app()->request->baseUrl ?>/images/360/alpina/Imagen.png"  >
						<div class="align-center">
							<h3>Alpina</h3>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/alpina_mil_rayas.png">
					</div>
				</div>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<br/><br/>
					<div id="image_holder_3" data-num="3" class="image-holder col-sm-7 col-md-5 image-360">
						<img id="product_image_3" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_tacon/Imagen.png"  >
						<div class="align-center">
							<h3>Botín charro</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/botin_mil_rayas.png">
					</div>
					<div class="model-information col-sm-3 col-md-4">
						<p>Tallas: 15-25</p>
						<p>Colores: Negro y Café</p>
					</div>
				</div>
				<div class="row">
					<br/><br/>
					<div class="model-information align-right col-sm-3 col-md-4">
						<p>Tallas: 15-25</p>
						<p>Colores: Negro y Café</p>
					</div>
					<div id="image_holder_4" data-num="4" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_4" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_tacon/Imagen.png"  >
						<div class="align-center">
							<h3>Botín charro</h3>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/botin_mil_rayas.png">
					</div>
				</div>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<br/><br/>
					<div id="image_holder_5" data-num="5" class="image-holder col-sm-7 col-md-5 image-360">
						<img id="product_image_5" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_tacon/Imagen.png"  >
						<div class="align-center">
							<h3>Botín charro</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/botin_mil_rayas.png">
					</div>
					<div class="model-information col-sm-3 col-md-4">
						<p>Tallas: 15-25</p>
						<p>Colores: Negro y Café</p>
					</div>
				</div>
				<div class="row">
					<br/><br/>
					<div class="model-information align-right col-sm-3 col-md-4">
						<p>Tallas: 15-25</p>
						<p>Colores: Negro y Café</p>
					</div>
					<div id="image_holder_6" data-num="6" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_6" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_tacon/Imagen.png"  >
						<div class="align-center">
							<h3>Botín charro</h3>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/botin_mil_rayas.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$( document ).ready(function() {
		alto_portada = 0;
		$('.flipbook-sheet').each(function(){
			alto = $(this).height();
			if (alto > alto_portada) {
				alto_portada = alto;
			}
		});
		$('.portada').height(alto_portada);
		$('.image-holder').each(function(){
			num = $(this).data('num');
			//Lets create an instance of the viewer
			var presentation = new javascriptViewer($('#product_image_'+num),{
				total_frames:10,
				target_id:'image_holder_'+num
			});

			//Lets start the presentation
			presentation.start();
		});
	});

	function loadApp() {
		width = $('#content').width();
		height = $('.flipbook').height();
		sheetNumber = $('.flipbook .flipbook-sheet').length;
		height = height/sheetNumber;
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
		yep: ['js/turnjs/lib/turn.js'],
		nope: ['js/turnjs/lib/turn.html4.min.js'],
		complete: loadApp
	});
</script>