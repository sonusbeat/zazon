<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Zazón - Restaurant Bar</title>
		<!-- Meta Tags -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- SEO -->
		<meta name="robots" content="index, follow">
		<meta name="description" content="Restaurant Bar de Cocina Internacional en Zapopan, Jalisco, México">
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/sexy-slider.css" />
		<link rel="stylesheet" href="css/main-stylesheet-min.css" />
		<link id="style-responsive" rel="stylesheet" media="screen" href="css/responsive/desktop.css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->
		<!-- JavaScripts -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.sexyslider.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/museo.font.js" type="text/javascript"></script>
		<?php include('_components/front-page-js.html'); ?>
	</head>
	<body class="top">
		<div class="container">
			<div class="main-header-wrapper">
				<header>
					<div class="header">
						<?php #include('_components/feedback.html'); ?>
						<?php include('_components/logo-zazon.html'); ?>
					</div><!-- END .header -->
				</header>
			</div><!-- END .main-header-wrapper -->
			<?php include('_components/main-menu.html'); ?>
			<?php include('_components/homepage-slider.html'); ?>
			<div class="content-wrapper">
				<div class="content">
					<div class="homepage-wrapper">						
						<table>
							<tr>
								<?php include('_components/front-page-main-saucers.html'); ?>
								<td class="spacer"></td>
								<?php include('_components/front-page-events.html'); ?>
							</tr>
							<tr>
								<td class="homepage-about-bottom"><p class="back-top"><a href="#top"><span>volver arriba</span></a></p></td>
								<td class="spacer"></td>
								<td class="events-bottom"><p class="back-top"><a href="#top"><span>volver arriba</span></a></p></td>
							</tr>
						</table>
						<?php include('_components/front-page-columns.html'); ?>
					</div><!-- END .homepage-wrapper -->
				</div><!-- END .content -->
			</div><!-- END .content-wrapper -->
			<div class="clear-footer"></div>
		</div><!-- END .container -->
		<?php include('_components/footer.html'); ?>
	</body>
</html>