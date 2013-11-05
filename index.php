<!doctype html>
<html lang="es">
	<head>
		<title>Zazón - Restaurant Bar</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="index, follow">
		<meta name="description" content="Zazón Restaurant Bar, Dirección: Plaza Alegra, Avenida Guadalupe #6000 Local 31 Tel: (33) 12-04-98-06">
		<link href="favicon.ico" rel="shortcut icon">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="assets/css/custom.css">
		<!--later than IE 9 -->
	    <!--[if lt IE 9]>
	      <script src="assets/js/html5shiv.js"></script>
	      <script src="assets/js/respond.js"></script>
	    <![endif]-->
		<!-- Estadisticas de Google Analytics -->
		<?php #include_once "modules/analytics.html"; ?>
	</head>
	<body class="inicio">
		<header class="top">
			<?php include('modules/header.html'); ?>
		</header>
		<nav>
			<?php include('modules/navbar.html'); ?>
		</nav>
		<section class="banner">
			<?php include('modules/banner.html'); ?>
		</section>
		<section class="content">
			<?php include('modules/content.php'); ?>
		</section>
		<footer class="footer">						
			<?php include('modules/footer.php'); ?>
		</footer>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Custom Javascript -->
		<script src="assets/js/custom.js"></script>

	</body>
</html>
