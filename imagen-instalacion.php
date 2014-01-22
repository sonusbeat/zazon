<?php include('includes/instalaciones_array-dev.php'); ?>
<?php

// if(isset($_GET['instalacion']) && $_GET['instalacion'] !== '' && array_key_exists($_GET['instalacion'], $instalaciones)) :
		
	$titulo_instalacion = $instalaciones[$_GET['imagen-instalacion']]['titulo'];
	$imagen_instalacion = $instalaciones[$_GET['imagen-instalacion']]['img'];
	$back_link = $instalaciones[$_GET['imagen-instalacion']]['back-link'];
// else :
// 	header('location: /');
// endif;

?>
<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<!-- Title -->
		<title>Zazón Restaurant Bar - Galeria de Imagenes de Instalaciones</title>
		<!-- Meta Tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/sexy-slider.css" type="text/css" />
		<link rel="stylesheet" href="css/content-slider.css" type="text/css" />
		<link rel="stylesheet" href="css/main-stylesheet-min.css" type="text/css" />
		<link type="text/css" id="style-responsive" rel="stylesheet" media="screen" href="css/responsive/desktop.css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" type="text/css" />
		<![endif]-->
		<!-- JavaScripts -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.sexyslider.js" type="text/javascript"></script>
		<script src="js/jquery.contentslider.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/museo.font.js" type="text/javascript"></script>
		<script src="js/jquery.tinytips.js" type="text/javascript"></script>
		<?php include('_components/open-gallery-js.html'); ?>
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
													<!-- <a href="#">mostrar todas las imagenes</a> -->
												</div>
												<div class="photo-gallery-open">
													<h3><?php echo $titulo_instalacion; ?></h3>
													<img src=<?php echo '"images/instalaciones/'.$imagen_instalacion.'"'; ?> alt="" class="image">
													<a href="<?php echo $back_link; ?>.php" class="btn-1 btn-1-color-blue btn-1-align-left" title="Volver a la Galería"><span>&lt;&lt; Volver a la Galería</span></a>
													<!-- <a href="#" class="btn-1 btn-1-color-blue btn-1-align-right"><span>Galeria de Imagenes &gt;&gt;</span></a> -->
													<div class="clear"></div>
												</div><!-- END .photo-gallery-open -->
											</div><!-- END .full-width-content -->
										</div><!-- End .content -->
									</div><!-- End .content-wrapper -->
								</td><!-- End .full-width-content-wrapper -->
							</tr>								
							<tr>								
								<td class="full-width-content-wrapper-bottom">			
									<p class="back-top"><a href="#top"><span>Ir Arriba</span></a></p>
								</td>
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