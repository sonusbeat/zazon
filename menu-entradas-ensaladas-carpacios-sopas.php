<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Zazón - Menu de Platillos y Bebidas</title>
		<!-- Meta Tags -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- SEO -->
		<meta name="robots" content="index, follow">
		<meta name="description" content="Restaurant Bar de Cocina Internacional Menu de Platillos y Bebidas">
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/sexy-slider.css" />
		<link rel="stylesheet" href="css/content-slider.css" />
		<link rel="stylesheet" href="css/main-stylesheet-min.css" />
		<link id="style-responsive" rel="stylesheet" media="screen" href="css/responsive/desktop.css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->
		<!-- JavaScripts -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.sexyslider.js" type="text/javascript"></script>
		<script src="js/jquery.contentslider.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/museo.font.js" type="text/javascript"></script>
		<script src="js/jquery.tinytips.js" type="text/javascript"></script>
		<?php include('_components/menu-card-js.html'); ?>
	</head>
	<body class="top">
		<div class="container">
			<div class="main-header-wrapper">
				<div class="header">
					<?php #include('_components/feedback.html'); ?>										
					<?php include('_components/logo-zazon.html'); ?>
				</div><!-- END .header -->
			</div><!-- END .main-header-wrapper -->
			<?php include('_components/main-menu.html'); ?>
			<?php include('_components/saucers-slider.html'); ?>
			<div class="content-wrapper">
				<div class="content">
						<?php include('_components/menu-card-1.php'); ?>
				</div><!-- END .content -->
			</div><!-- END .content-wrapper -->
			<div class="clear-footer"></div>
		</div><!-- END .container -->
		<?php include('_components/footer.html'); ?>
	</body>
</html>