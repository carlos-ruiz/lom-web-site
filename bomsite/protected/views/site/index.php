<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_00/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_00/derecho.jpg"/>
						 
						<div id="gallery_01" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_00/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_00/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_00/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_00/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_00/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_00/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_00/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_00/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_00/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_00/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_00/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_00/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_02" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/alpina/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/alpina/derecho.jpg"/>
						 
						<div id="gallery_02" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/alpina/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/alpina/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/alpina/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/alpina/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/alpina/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/alpina/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/alpina/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/alpina/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/alpina/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/alpina/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/alpina/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/alpina/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_01").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_01").bind("click", function(e) {  
						  var ez =   $('#img_01').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_02").elevateZoom({gallery:'gallery_02', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_02").bind("click", function(e) {  
						  var ez =   $('#img_02').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_03" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro_st/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro_st/derecho.jpg"/>
						 
						<div id="gallery_03" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro_st/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro_st/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro_st/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro_st/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro_st/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro_st/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro_st/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro_st/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro_st/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro_st/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro_st/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro_st/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_04" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_02/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_02/derecho.jpg"/>
						 
						<div id="gallery_04" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_02/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_02/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_02/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_02/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_02/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_02/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_02/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_02/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_02/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/agujeta_02/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/agujeta_02/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/agujeta_02/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_03").elevateZoom({gallery:'gallery_03', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_03").bind("click", function(e) {  
						  var ez =   $('#img_03').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_04").elevateZoom({gallery:'gallery_04', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_04").bind("click", function(e) {  
						  var ez =   $('#img_04').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_05" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/canera/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/canera/derecho.jpg"/>
						 
						<div id="gallery_05" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/canera/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/canera/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/canera/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/canera/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/canera/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/canera/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/canera/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/canera/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/canera/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/canera/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/canera/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/canera/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_06" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/cat_sh/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/cat_sh/derecho.jpg"/>
						 
						<div id="gallery_06" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/cat_sh/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/cat_sh/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/cat_sh/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/cat_sh/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/cat_sh/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/cat_sh/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/cat_sh/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/cat_sh/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/cat_sh/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/cat_sh/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/cat_sh/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/cat_sh/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_05").elevateZoom({gallery:'gallery_05', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_05").bind("click", function(e) {  
						  var ez =   $('#img_05').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_06").elevateZoom({gallery:'gallery_06', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_06").bind("click", function(e) {  
						  var ez =   $('#img_06').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_07" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/escolar_shuany/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/escolar_shuany/derecho.jpg"/>
						 
						<div id="gallery_07" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/escolar_shuany/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/escolar_shuany/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/escolar_shuany/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/escolar_shuany/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/escolar_shuany/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/escolar_shuany/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/escolar_shuany/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/escolar_shuany/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/escolar_shuany/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/escolar_shuany/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/escolar_shuany/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/escolar_shuany/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_08" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/jeet_scat/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/jeet_scat/derecho.jpg"/>
						 
						<div id="gallery_08" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/jeet_scat/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/jeet_scat/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/jeet_scat/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/jeet_scat/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/jeet_scat/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/jeet_scat/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/jeet_scat/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/jeet_scat/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/jeet_scat/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/jeet_scat/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/jeet_scat/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/jeet_scat/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_07").elevateZoom({gallery:'gallery_07', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_07").bind("click", function(e) {  
						  var ez =   $('#img_07').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_08").elevateZoom({gallery:'gallery_08', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_08").bind("click", function(e) {  
						  var ez =   $('#img_08').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_09" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/medio_botin_cuna/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/medio_botin_cuna/derecho.jpg"/>
						 
						<div id="gallery_09" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/medio_botin_cuna/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/medio_botin_cuna/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/medio_botin_cuna/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/medio_botin_cuna/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/medio_botin_cuna/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/medio_botin_cuna/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/medio_botin_cuna/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/medio_botin_cuna/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/medio_botin_cuna/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/medio_botin_cuna/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/medio_botin_cuna/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/medio_botin_cuna/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_10" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/palermo_st/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/palermo_st/derecho.jpg"/>
						 
						<div id="gallery_10" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/palermo_st/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/palermo_st/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/palermo_st/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/palermo_st/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/palermo_st/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/palermo_st/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/palermo_st/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/palermo_st/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/palermo_st/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/palermo_st/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/palermo_st/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/palermo_st/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_09").elevateZoom({gallery:'gallery_09', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_09").bind("click", function(e) {  
						  var ez =   $('#img_09').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_10").elevateZoom({gallery:'gallery_10', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_10").bind("click", function(e) {  
						  var ez =   $('#img_10').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_11" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_camu/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_camu/derecho.jpg"/>
						 
						<div id="gallery_11" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_camu/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_camu/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_camu/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_camu/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_camu/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_camu/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_camu/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_camu/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_camu/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_camu/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_camu/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_camu/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_12" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_beige/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_beige/derecho.jpg"/>
						 
						<div id="gallery_12" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_beige/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_beige/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_beige/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_beige/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_beige/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_beige/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_beige/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_beige/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_beige/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/poly_stzo_beige/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/poly_stzo_beige/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/poly_stzo_beige/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_11").elevateZoom({gallery:'gallery_11', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_11").bind("click", function(e) {  
						  var ez =   $('#img_11').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_12").elevateZoom({gallery:'gallery_12', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_12").bind("click", function(e) {  
						  var ez =   $('#img_12').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_13" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rokoso_miel/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rokoso_miel/derecho.jpg"/>
						 
						<div id="gallery_13" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rokoso_miel/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rokoso_miel/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rokoso_miel/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rokoso_miel/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rokoso_miel/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rokoso_miel/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rokoso_miel/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rokoso_miel/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rokoso_miel/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rokoso_miel/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rokoso_miel/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rokoso_miel/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_14" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_cuna/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_cuna/derecho.jpg"/>
						 
						<div id="gallery_14" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_cuna/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_cuna/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_cuna/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_cuna/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_cuna/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_cuna/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_cuna/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_cuna/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_13").elevateZoom({gallery:'gallery_13', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_13").bind("click", function(e) {  
						  var ez =   $('#img_13').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_14").elevateZoom({gallery:'gallery_14', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_14").bind("click", function(e) {  
						  var ez =   $('#img_14').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_15" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_shimalaya/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_shimalaya/derecho.jpg"/>
						 
						<div id="gallery_15" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_shimalaya/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_shimalaya/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_shimalaya/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_shimalaya/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_shimalaya/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_shimalaya/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_shimalaya/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_shimalaya/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_shimalaya/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_shimalaya/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_shimalaya/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_shimalaya/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_16" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_st_05/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_st_05/derecho.jpg"/>
						 
						<div id="gallery_16" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_st_05/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_st_05/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_st_05/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_st_05/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_st_05/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_st_05/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_st_05/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_st_05/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_st_05/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_st_05/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_st_05/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_st_05/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_15").elevateZoom({gallery:'gallery_15', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_15").bind("click", function(e) {  
						  var ez =   $('#img_15').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_16").elevateZoom({gallery:'gallery_16', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_16").bind("click", function(e) {  
						  var ez =   $('#img_16').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_17" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rudo/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rudo/derecho.jpg"/>
						 
						<div id="gallery_17" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rudo/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rudo/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rudo/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rudo/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rudo/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rudo/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rudo/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rudo/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rudo/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/rudo/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/rudo/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/rudo/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_18" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_sh/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_sh/derecho.jpg"/>
						 
						<div id="gallery_18" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_sh/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_sh/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_sh/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_sh/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_sh/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_sh/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_sh/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_sh/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_sh/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_sh/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_sh/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_sh/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_17").elevateZoom({gallery:'gallery_17', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_17").bind("click", function(e) {  
						  var ez =   $('#img_17').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_18").elevateZoom({gallery:'gallery_18', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_18").bind("click", function(e) {  
						  var ez =   $('#img_18').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_19" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_tp_ca_sv/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_tp_ca_sv/derecho.jpg"/>
						 
						<div id="gallery_19" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_tp_ca_sv/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_tp_ca_sv/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_tp_ca_sv/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_tp_ca_sv/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_tp_ca_sv/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_tp_ca_sv/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_tp_ca_sv/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_tp_ca_sv/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_tp_ca_sv/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_tp_ca_sv/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/ropper_tp_ca_sv/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_tp_ca_sv/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_20" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_tacon/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_tacon/derecho.jpg"/>
						 
						<div id="gallery_20" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_tacon/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_tacon/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_tacon/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_tacon/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_tacon/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_tacon/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_tacon/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_tacon/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_tacon/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_tacon/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_tacon/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_tacon/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_19").elevateZoom({gallery:'gallery_19', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_19").bind("click", function(e) {  
						  var ez =   $('#img_19').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_20").elevateZoom({gallery:'gallery_20', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_20").bind("click", function(e) {  
						  var ez =   $('#img_20').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_21" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro/derecho.jpg"/>
						 
						<div id="gallery_21" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/botin_charro/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/botin_charro/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/botin_charro/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_22" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/derecho.jpg"/>
						 
						<div id="gallery_22" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_21").elevateZoom({gallery:'gallery_21', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_21").bind("click", function(e) {  
						  var ez =   $('#img_21').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_22").elevateZoom({gallery:'gallery_22', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_22").bind("click", function(e) {  
						  var ez =   $('#img_22').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_23" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/kongo/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/kongo/derecho.jpg"/>
						 
						<div id="gallery_23" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/kongo/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/kongo/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/kongo/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/kongo/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/kongo/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/kongo/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/kongo/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/kongo/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/kongo/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/kongo/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/kongo/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/kongo/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7 align-center">
						<img id="img_24" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/derecho.jpg"/>
						 
						<div id="gallery_24" class="gallery"> 
							<a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/derecho.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/derecho.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/derecho.jpg" />
							  </a>
							   
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/atras.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/atras.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/atras.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/izquierdo.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/izquierdo.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/izquierdo.jpg" />
							  </a>
							 
							  <a href="#" data-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/texas_tacon/frente.jpg" data-zoom-image="<?= Yii::app()->request->baseUrl ?>/images/modelos/grande/texas_tacon/frente.jpg">
								<img id="img_01" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/texas_tacon/frente.jpg" />
							</a>
						</div>
					</div>
					<div class="col-md-5">
						Texto informativo
					</div>
				</div>
				<script type="text/javascript">
					$("#img_23").elevateZoom({gallery:'gallery_23', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_23").bind("click", function(e) {  
						  var ez =   $('#img_23').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});

					$("#img_24").elevateZoom({gallery:'gallery_24', cursor: 'pointer', galleryActiveClass: 'active'}); 
					//pass the images to Fancybox
					$("#img_24").bind("click", function(e) {  
						  var ez =   $('#img_24').data('elevateZoom'); 
						 $.fancybox(ez.getGalleryList());
						  return false;
					});
				</script>
			</div>

			<!-- Probando nueva forma de mostrar imágenes -->
			<div class="flipbook-sheet">
				<div class="product-details">
					<div class="product-images col-md-7">
						<div class="row big-image">
							<img id="ropper_cuna_current" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mediano/ropper_cuna/derecho.png">
						</div>
						<div class="row thumbnails" data-model="ropper_cuna">
							<img data-type="zapato" data-image="derecho" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/derecho.jpg">
							<img data-type="zapato" data-image="atras" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/atras.jpg">
							<img data-type="zapato" data-image="izquierdo" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/izquierdo.jpg">
							<img data-type="zapato" data-image="frente" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/ropper_cuna/frente.jpg">
							<img data-type="suela" data-image="mil_rayas" src="<?= Yii::app()->request->baseUrl ?>/images/modelos/mini/suelas/mil_rayas.jpg">
						</div>
					</div>
					<div class="product-information col-md-5">

					</div>
				</div>
			</div>
			<!-- Fin de la prueba de imágenes -->

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
					<div id="image_holder_1" data-num="1" class="image-holder col-sm-7 col-md-6 image-360">
						<img id="product_image_1" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_tacon/Imagen.png"  >
						<div class="align-center">
							<h3>Botín charro</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
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
						<div class="colores">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/negro.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/miel.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/shedron.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/vino.png" width="30px">
						</div>
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
					<div id="image_holder_3" data-num="3" class="image-holder col-sm-7 col-md-6 image-360">
						<img id="product_image_3" src="<?= Yii::app()->request->baseUrl ?>/images/360/cat/Imagen.png"  >
						<div class="align-center">
							<h3>Cat</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/himalaya.png">
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
						<div class="colores">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/negro.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/miel.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/shedron.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/vino.png" width="30px">
						</div>
					</div>
					<div id="image_holder_4" data-num="4" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_4" src="<?= Yii::app()->request->baseUrl ?>/images/360/poly/Imagen.png"  >
						<div class="align-center">
							<h3>Poly S/TZO</h3>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/tozaro_poly.png">
					</div>
				</div>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<br/><br/>
					<div id="image_holder_5" data-num="5" class="image-holder col-sm-7 col-md-6 image-360">
						<img id="product_image_5" src="<?= Yii::app()->request->baseUrl ?>/images/360/rokoso/Imagen.png"  >
						<div class="align-center">
							<h3>Rokoso</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/tozaro.png">
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
						<div class="colores">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/negro.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/miel.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/shedron.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/vino.png" width="30px">
						</div>
					</div>
					<div id="image_holder_6" data-num="6" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_6" src="<?= Yii::app()->request->baseUrl ?>/images/360/ropper/Imagen.png"  >
						<div class="align-center">
							<h3>Ropper Cuña</h3>
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
					<div id="image_holder_7" data-num="7" class="image-holder col-sm-7 col-md-6 image-360">
						<img id="product_image_7" src="<?= Yii::app()->request->baseUrl ?>/images/360/botin_charro_st/Imagen.png"  >
						<div class="align-center">
							<h3>Botín Charro S/T</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/trebol.png">
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
						<div class="colores">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/negro.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/miel.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/shedron.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/vino.png" width="30px">
						</div>
					</div>
					<div id="image_holder_8" data-num="8" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_8" src="<?= Yii::app()->request->baseUrl ?>/images/360/agujeta_02/Imagen.png"  >
						<div class="align-center">
							<h3>Agujeta 02</h3>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/agujeta_02.png">
					</div>
				</div>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<br/><br/>
					<div id="image_holder_9" data-num="9" class="image-holder col-sm-7 col-md-6 image-360">
						<img id="product_image_9" src="<?= Yii::app()->request->baseUrl ?>/images/360/escolar/Imagen.png"  >
						<div class="align-center">
							<h3>Escolar</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/trebol.png">
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
						<div class="colores">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/negro.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/miel.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/shedron.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/vino.png" width="30px">
						</div>
					</div>
					<div id="image_holder_10" data-num="10" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_10" src="<?= Yii::app()->request->baseUrl ?>/images/360/rudo/Imagen.png"  >
						<div class="align-center">
							<h3>Rudo</h3>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/agujeta_02.png">
					</div>
				</div>
			</div>

			<div class="flipbook-sheet">
				<div class="row">
					<br/><br/>
					<div id="image_holder_11" data-num="11" class="image-holder col-sm-7 col-md-6 image-360">
						<img id="product_image_11" src="<?= Yii::app()->request->baseUrl ?>/images/360/ropper_tp/Imagen.png"  >
						<div class="align-center">
							<h3>Ropper T/P C/A</h3>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/suela_ropper_tp.png">
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
						<div class="colores">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/negro.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/miel.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/shedron.png" width="30px">
							<img src="<?= Yii::app()->request->baseUrl ?>/images/colores/vino.png" width="30px">
						</div>
					</div>
					<div id="image_holder_12" data-num="12" class="image-holder image-360 col-sm-6 col-md-5">
						<img id="product_image_12" src="<?= Yii::app()->request->baseUrl ?>/images/360/rudo/Imagen.png"  >
						<div class="align-center">
							<h3>Rudo</h3>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<img class="foto-suela" src="<?= Yii::app()->request->baseUrl ?>/images/suelas/agujeta_02.png">
					</div>
				</div>
			</div>

			<div class="flipbook-sheet portada">
				<div class="align-center center-vertical centered-container">
					<img class="centered" src="<?= Yii::app()->request->baseUrl ?>/images/logos/logo.png">
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
		$('.flipbook-sheet').height(alto_portada);
		$('.image-holder').each(function(){
			num = $(this).data('num');
			//Lets create an instance of the viewer
			var presentation = new javascriptViewer($('#product_image_'+num),{
				total_frames:14,
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
