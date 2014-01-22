<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Zazón Restaurant Bar - ¿ Quienes Somos ?</title>
		<!-- Meta Tags -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- SEO -->
		<meta name="robots" content="index, follow">
		<meta name="description" content="Restaurant Bar de Cocina Internacional en Zapopan, Jalisco, México">
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/sexy-slider.css" type="text/css" />
		<link rel="stylesheet" href="css/content-slider.css" type="text/css" />
		<link rel="stylesheet" href="css/main-stylesheet-min.css" type="text/css" />
		<link type="text/css" id="style-responsive" rel="stylesheet" media="screen" href="css/responsive/desktop.css" />
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
		<?php include('_components/about-us.js.html'); ?>
	</head>
	<body class="top">
		<div class="container">
			<div class="main-header-wrapper">
				<header class="header">
					<?php #include('_components/feedback.html'); ?>
					<?php include('_components/logo-zazon.html'); ?>
				</header>
			</div><!-- END .main-header-wrapper -->
			<?php include('_components/main-menu.html'); ?>
			<div class="content-wrapper no-content-slider-wrapper">
				<div class="content">
					<div class="full-width-wrapper">
						<table>
							<tr>
								<td class="full-width-content-wrapper">
									<div class="top"></div>
									<div class="content-wrapper">
										<div class="content">
											<div class="full-width-content">
												<div class="main-title">
													<span><b>Instalaciones</b></span>
													<a href="/">Volver a Inicio</a>
												</div>
												<div class="full-width">
													<h3 class="center">Galeria de Imagenes</h3>													
													<?php include('_components/galeria-imagenes-instalaciones.php'); ?>
												</div><!-- END .full-width-content -->
											</div><!-- END .full-width-content -->
										</div><!-- END .content -->
									</div><!-- END .content-wrapper -->
								</td>
							</tr>
							<tr>
								<td class="full-width-content-wrapper-bottom"><p class="back-top"><a href="#top"><span>Volver Arriba</span></a></p></td>
							</tr>
						</table>
					</div><!-- END .full-width-wrapper -->
				</div><!-- END .content -->
			</div><!-- END .content-wrapper -->
			<div class="clear-footer"></div>
		</div><!-- END .container -->
		<?php include('_components/footer.html'); ?>
	</body>
</html>