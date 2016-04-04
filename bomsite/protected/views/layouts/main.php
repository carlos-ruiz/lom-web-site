<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="es">

		<link rel="shortcut icon" href="<?= Yii::app()->request->baseurl; ?>/images/logos/favicon.ico">

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flipbook.css">

		<!-- Importing scripts -->
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/javascriptviewer_jso.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/turnjs/extras/modernizr.2.5.3.min.js"></script>
		<!-- End importing scripts -->

		<!-- Importing plugins for zoom gallery -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/fancybox/jquery.fancybox-1.3.4.css">
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/assets/plugins/elevate_zoom/jquery.elevateZoom-3.0.8.min.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/assets/plugins/fancybox/jquery.fancybox-1.3.4.js"></script>
		<!-- End importing plugins for zoom gallery -->

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		<div class="container" id="page">
			<div id="header">
				<div id="logo"><img src="<?= Yii::app()->request->baseUrl ?>/images/logos/logo.png" width="100"> Catálogo de productos <img src="<?= Yii::app()->request->baseUrl ?>/images/logos/logo.png" width="100"></div>
			</div><!-- header -->
			<hr/>
			<?php echo $content; ?>

			<div class="clear"></div>

			<div id="footer">
				<div class="col-md-4">
					Dirección<br/>
					Ana María Gallaga #160, Centro<br/>
					Huaniqueo de Morales, Michoacán
				</div>
				<div class="col-md-4">
					Copyright &copy; <?php echo date('Y'); ?> by Botas y Botines BOM.<br/>
					Todos los derechos reservados.<br/>
				</div>
				<div class="col-md-4">
					Contacto<br/>
					Teléfono: 01 (454) 382 01 57<br/>
					Correo electrónico: <a href="mailto:calzadobom2015@gmail.com">calzadobom2015@gmail.com</a><br/><br/>
				</div>
			</div><!-- footer -->

		</div><!-- page -->
	</body>
	<!-- Importing more scripts -->
	<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/turnjs/lib/hash.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/turnjs/lib/turn.min.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/custom.js"></script>
	<!-- End importing scripts -->
</html>
