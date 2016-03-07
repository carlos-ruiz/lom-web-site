<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="en">

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">

		<!-- Importing scripts -->
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/jquery.mobile-1.4.5.min.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/plugins/javascriptviewer_jso.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/turnjs/extras/modernizr.2.5.3.min.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/turnjs/lib/hash.js"></script>
		<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/js/turnjs/lib/turn.min.js"></script>

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		<div class="container" id="page">
			<div id="header">
				<div id="logo">Catálogo de productos</div>
			</div><!-- header -->

			<?php echo $content; ?>

			<div class="clear"></div>

			<div id="footer">
				Copyright &copy; <?php echo date('Y'); ?> by Botas y Botines BOM.<br/>
				All Rights Reserved.<br/>
				<?php echo Yii::powered(); ?>
			</div><!-- footer -->

		</div><!-- page -->
	</body>
</html>
