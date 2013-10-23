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
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<!--later than IE 9 -->
	    <!--[if lt IE 9]>
	      <script src="assets/js/html5shiv.js"></script>
	      <script src="assets/js/respond.js"></script>
	    <![endif]-->
		<!-- Custom CSS -->
		<link rel="stylesheet" href="assets/css/custom.css">
		<!-- Estadisticas de Google Analytics -->
		<?php include_once "modules/analytics.html"; ?>
	</head>
	<body class="inicio">
		<div class="container">
			<section>
				<article>
					<header>
						<center>
							<h1>Zazón - Restaurant Bar</h1>
						</center>
					</header>
					<nav>
						<?php include('modules/navbar.html'); ?>
					</nav>
					<section>
						<div class="row">
							<div class="col-lg-8 content">
								<article>
									<p class="lead">Este sitio se encuentra actualmente en construcción, asi que les pedimos un poco de su comprensión ya que muy pronto estará disponible para todos nuestros clientes y visitantes.</p>			
									<center>
										<img class="img-responsive" src="assets/img/zazon-logo.jpg" alt="Zazón Logo" title="Zazón Restaurant Bar Logo">
									</center>
								</article>
							</div><!-- content -->
							<div class="col-lg-4">
								<aside>
																		
								</aside>
							</div>
						</div><!-- row -->	
					</section>
					<footer>
						<div class="row">
							<div class="col-lg-4">
								<?php include("modules/address.html"); ?>
							</div>
							<div class="col-lg-4">
								<?php include('modules/social-networks.html'); ?>
							</div>
							<div class="col-lg-4">
								<?php include("modules/map.html"); ?>
							</div>
						</div>
						<center>&copy; zazon 2013</center>
					</footer>
				</article>
			</section>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="//code.jquery.com/jquery.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
      	$('a.menu-link').tooltip( 
      		{ 
      			"delay": { "show": 100, "hide": 250 },
      			"placement": "bottom"
      		}
    		);
      });
		</script>
	</body>
</html>
