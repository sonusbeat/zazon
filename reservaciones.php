<?php include_once('process-reservation.php'); ?>
<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Zazón - Restaurant Bar (Reservaciones)</title>
		<!-- Meta Tags -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- SEO -->
		<meta name="robots" description="noindex, nofollow">
		<meta name="description" content="Restaurant Bar de Cocina Internacional en Zapopan, Jalisco, México">
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/sexy-slider.css">
		<link rel="stylesheet" href="css/content-slider.css">
		<link rel="stylesheet" href="css/main-stylesheet-min.css">
		<link id="style-responsive" rel="stylesheet" media="screen" href="css/responsive/desktop.css" />
		<!--[if IE 7]><link rel="stylesheet" href="css/ie7.css" type="text/css" type="text/css" /><![endif]-->
		<!-- JavaScripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.sexyslider.js"></script>
		<script src="js/jquery.contentslider.js"></script>
		<script src="js/cufon-yui.js"></script>
		<script src="js/museo.font.js"></script>
		<script src="js/jquery.tinytips.js"></script>
		<?php include('_components/menu-card-js.html'); ?>
	</head>
	<body class="top">
		<div class="container">
			<div class="main-header-wrapper">
				<div class="header">
					<?php include('_components/feedback.html'); ?>
					<?php include('_components/logo-zazon.html'); ?>
				</div><!-- END .header -->	
			</div><!-- END .main-header-wrapper -->
			<?php include('_components/main-menu.html'); ?>
			<?php include('_components/saucers-slider.html'); ?>
			<div class="content-wrapper">
				<div class="content">
					<div class="homepage-wrapper">
						<table>
							<tr>
								<td class="main-content-wrapper">
									<div class="top"></div>
									<div class="content-wrapper">
										<div class="content">
											<div class="left-side">
												<div class="main-title">
													<span><b>Reservaciones</b></span>
													<a href="/">Volver al Inicio</a>
												</div>
												<div class="post">
													
													<div>
														<?php var_dump($post_array); ?>	
													</div>

													<h3>Realiza tu reservación</h3>
													<p>Selecciona la Fecha y Hora así como tu nombre completo, teléfono, email y si tienes algunas especificaciones extras escribelas en notas extras.</p>
													<form action="reservaciones.php" method="post">
														<div class="reservations-wrapper">
															<table class="reservations">
																<tr>
																	<td colspan="2">
																		<div class="top-error-message">
																			Por favor llena los campos obligatorios
																		</div>
																</td>
																</tr>
																<tr>
																	<td class="label"><label>Fecha:</label></td>
																	<td>
																		<p class="input-text-1">
																			<span>
																				<input type="date" size="8" class="date" name="date">
																			</span>
																		</p>
																	</td>
																</tr>
																<tr>
																	<td class="label-time"><label>Horario:</label></td>
																	<td class="time">
																		<p>
																			<span>De:</span>
																			<select>
																				<option>Hora</option>
																				<option>00</option>
																				<option>01</option>
																				<option>02</option>
																				<option>03</option>
																				<option>04</option>
																				<option>05</option>
																				<option>06</option>
																				<option>07</option>
																				<option>08</option>
																				<option>09</option>
																				<option>10</option>
																				<option>11</option>
																				<option>12</option>
																			</select>
																			<b>:</b>
																			<select>
																				<option>Minuto</option>
																				<option>00</option>
																				<option>15</option>
																				<option>30</option>
																				<option>45</option>
																			</select>
																			<select>
																				<option>PM</option>
																				<option>AM</option>
																			</select>
																		</p>
																		
																		<p>
																			<span>Hasta:</span>
																			<select>
																				<option>Hora</option>
																				<option>00</option>
																				<option>01</option>
																				<option>02</option>
																				<option>03</option>
																				<option>04</option>
																				<option>05</option>
																				<option>06</option>
																				<option>07</option>
																				<option>08</option>
																				<option>09</option>
																				<option>10</option>
																				<option>11</option>
																				<option>12</option>
																			</select>
																			<b>:</b>
																			<select>
																				<option>Minuto</option>
																				<option>00</option>
																				<option>15</option>
																				<option>30</option>
																				<option>45</option>
																			</select>
																			<select>
																				<option>PM</option>
																				<option>AM</option>
																			</select>
																		</p>
																	</td>
																</tr>
																<tr>
																	<td class="label"><label>Nombre:</label></td>
																	<td><p class="input-text-1"><span><input type="text" /></span></p></td>
																</tr>
																<tr><td class="spacer" colspan="2"></td></tr>
																<tr>
																	<td class="label"><label>Teléfono:</label></td>
																	<td>
																		<p class="input-text-1 input-text-1-error"><span><input type="text" /></span></p>
																		<p class="error-message"><s>Escribe solo números</s></p>
																	</td>
																</tr>
																<tr><td class="spacer" colspan="2"></td></tr>
																<tr>
																	<td class="label"><label>E-mail:</label></td>
																	<td><p class="input-text-1"><span><input type="text" /></span></p></td>
																</tr>
																<tr><td class="spacer" colspan="2"></td></tr>
																<tr>
																	<td class="label notes"><label>Notas Extras</label></td>
																	<td>
																		<div class="text-area-2">
																			<div class="top">
																				<textarea></textarea>
																			</div>
																			<div class="bottom"></div>
																		</div>
																	</td>
																</tr>
																<tr><td class="spacer" colspan="2"></td></tr>
																<tr>
																	<td></td>
																	<td colspan="2">
																		<div class="show-all">
																			<button class="submit"><span>Enviar Reservación</span></button>
																		</div>
																	</td>
																</tr>
															</table>
														</div><!-- END .reservations-wrapper -->
													</form>
													<h3><a href="#">Información necesaria antes de realizar una reservación.</a></h3>
													<p>In sed odio libero, vitae elementum urna. Vestibulum et ligula sed lectus blandit pretium in non metus. Donec dapibus, ipsum vel vehicula tempor, purus urna vestibulum mi, eu tempor elit turpis vitae enim. Duis porttitor mi sed nisi rhoncus at porta tellus sagittis. Duis eget sapien metus, gravida auctor nulla.</p>
													<div class="success">
														<p><b>Gracias</b></p>
														<p>Tu reservación ha sido enviada</p>
													</div>
												</div><!-- END .post -->
												<div class="clear"></div>
												<p class="show-all last"><a href="#"><span>Volver a Inicio</span></a></p>
											</div><!-- END .left-side -->
											<div class="right-side">
												<div class="sidebar-block-1">
													<div class="title"><h3>About reservations</h3></div>
													<div class="basic-1">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim gravida justo quis bibendum. Phasellus urna tortor, porta eu porta sit amet, molestie at velit. Sed a ullamcorper justo.</p>
														<p>Praesent vulputate gravida metus, eget rhoncus turpis ultrices ut. Sed gravida, magna in porta ultricies, nulla mauris luctus odio, nec blandit erat metus congue metus. Vivamus non justo vitae tellus blandit sagittis ut ut mi. Sed id dolor sed nibh vehicula vulputate. Aliquam eu eros metus.</p>
														<p>In aliquam leo sed est feugiat suscipit nulla ligula orcitta:</p>
														<p class="last"><span>+371 7153 967834</span></p>
													</div><!-- END .basic-1 -->
												</div><!-- END .sidebar-block-1 -->
												<div class="sidebar-block-1">
													<div class="title"><h3>Latest news</h3><a href="#">show all</a></div>
													<div class="latest-news">
														<div class="news-item">
															<p class="news-title"><a href="#" class="title">Aliquam in condimentum augue</a></p>
															<p>Cras vulputate dui at felis varius et consecte tur risus viverra. Vivamus commodo gravida malesuada.consequat dui.</p>
															<p class="last"><a href="#" class="more-link">Read more</a></p>
														</div>
														<div class="news-item">
															<p class="news-title"><a href="#" class="title">Mauris tristique, orci eu elemen accumsan, arcu arcu porttitor</a></p>
															<p>Fusce consectetur consectetur odio ac hendrerit. In hac habitasse platea dictumst. Suspendisse adipiscing tempus leo et pulvinar. Aliquam nec tellus lectus.</p>
															<p class="last"><a href="#" class="more-link">Read more</a></p>
														</div>
														<div class="news-item">
															<p class="news-title"><a href="#" class="title">Etiam ultricies euismod turpis</a></p>
															<p>Vivamus commodo gravida alesuada cons equat dui sociis natoue penatibus et magnis.</p>
															<p class="last"><a href="#" class="more-link">Read more</a></p>
														</div>
														<div class="news-item last">
															<p class="news-title"><a href="#" class="title">Aliquam in condimentum augue</a></p>
															<p>Cras vulputate dui at felis varius et consecte tur risus viverra. Vivamus commodo gravida malesuada.consequat dui.</p>
															<p class="last"><a href="#" class="more-link">Read more</a></p>
														</div>
													</div><!-- END .latest-news -->
												</div><!-- END .sidebar-block-1 -->
											</div><!-- END .right-side -->
											<div class="clear"></div>
										</div><!-- END .content -->
									</div><!-- END .content-wrapper -->
								</td><!-- END .homepage-about -->
							</tr>
							<tr>
								<td class="main-content-wrapper-bottom"><p class="back-top"><a href="#top"><span>go back to the top</span></a></p></td>
							</tr>
						</table>
					</div><!-- END .homepage-wrapper -->
				</div><!-- END .content -->
			</div><!-- END .content-wrapper -->
			<div class="clear-footer"></div>
		</div><!-- END .container -->
		<?php include('_components/footer.html'); ?>
	</body>
</html>