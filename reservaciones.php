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
													
													<?php if(!$form_submited) : ?>
														<h3>Realiza tu reservación</h3>
														<p>Seleccione la Fecha, Hora de Inicio y Final de su Reservación así como también escriba su Nombre Completo, Teléfono ó Celular, Email.</p>
														<p>Si tiene algunas Especificaciones Adicionales para su Reservación escribalas en el campo de Información Adicional.</p>
														<form action="reservaciones.php" method="post">
															<div class="reservations-wrapper">
																<table class="reservations">
																		
																	<?php if(isset($form_error) && $form_error == true): ?>
																	<tr>
																		<td colspan="2">
																			<div class="top-error-message">
																				Hay Errores en tu Reservación
																			</div>
																		</td>
																	</tr>
																	<?php endif; ?>

																	<tr>
																		<td class="label"><label>Fecha:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $empty_date_error_class; ?>">
																				<span>																				
																					<input type="date" size="8" class="date" name="date" value="<?php echo $date; ?>">
																				</span>
																			</p>
																			<?php if(isset($empty_date_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_date_message; ?></s></p>
																			<?php endif; ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="label-time"><label>Horario:</label></td>
																		<td class="time">
																			<p>
																				<span>De:</span>
																				<select name="from-hour">
																						<option>Hora</option>
																						<option <?php if($from_hour == '0') echo 'selected'; ?>>0</option>
																						<option <?php if($from_hour == '1') echo 'selected'; ?>>1</option>
																						<option <?php if($from_hour == '2') echo 'selected'; ?>>2</option>
																						<option <?php if($from_hour == '3') echo 'selected'; ?>>3</option>
																						<option <?php if($from_hour == '4') echo 'selected'; ?>>4</option>
																						<option <?php if($from_hour == '5') echo 'selected'; ?>>5</option>
																						<option <?php if($from_hour == '6') echo 'selected'; ?>>6</option>
																						<option <?php if($from_hour == '7') echo 'selected'; ?>>7</option>
																						<option <?php if($from_hour == '8') echo 'selected'; ?>>8</option>
																						<option <?php if($from_hour == '9') echo 'selected'; ?>>9</option>
																						<option <?php if($from_hour == '10') echo 'selected'; ?>>10</option>
																						<option <?php if($from_hour == '11') echo 'selected'; ?>>11</option>
																						<option <?php if($from_hour == '12') echo 'selected'; ?>>12</option>
																					</select>
																				<b>:</b>
																				<select name="from-minute">
																					<option>Minuto</option>
																					<option <?php if($from_minute == '00') echo 'selected'; ?>>00</option>
																					<option <?php if($from_minute == '15') echo 'selected'; ?>>15</option>
																					<option <?php if($from_minute == '30') echo 'selected'; ?>>30</option>
																					<option <?php if($from_minute == '45') echo 'selected'; ?>>45</option>
																				</select>
																				<select name="from-meridian">
																					<option>am - pm</option>
																					<option <?php if($from_meridian == 'pm') echo 'selected'; ?>>pm</option>
																					<option <?php if($from_meridian == 'am') echo 'selected'; ?>>am</option>
																				</select>
																			</p>

																			<?php if(isset($empty_from_hour_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_from_hour_message; ?></s></p>
																			<?php endif; ?>

																			<?php if(isset($empty_from_meridian_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_from_meridian_message; ?></s></p>
																			<?php endif; ?>

																			<p>
																				<span>Hasta:</span>
																				<select name="to-hour">
																					<option>Hora</option>
																					<option <?php if($to_hour == '0') echo 'selected'; ?>>0</option>
																					<option <?php if($to_hour == '1') echo 'selected'; ?>>1</option>
																					<option <?php if($to_hour == '2') echo 'selected'; ?>>2</option>
																					<option <?php if($to_hour == '3') echo 'selected'; ?>>3</option>
																					<option <?php if($to_hour == '4') echo 'selected'; ?>>4</option>
																					<option <?php if($to_hour == '5') echo 'selected'; ?>>5</option>
																					<option <?php if($to_hour == '6') echo 'selected'; ?>>6</option>
																					<option <?php if($to_hour == '7') echo 'selected'; ?>>7</option>
																					<option <?php if($to_hour == '8') echo 'selected'; ?>>8</option>
																					<option <?php if($to_hour == '9') echo 'selected'; ?>>9</option>
																					<option <?php if($to_hour == '10') echo 'selected'; ?>>10</option>
																					<option <?php if($to_hour == '11') echo 'selected'; ?>>11</option>
																					<option <?php if($to_hour == '12') echo 'selected'; ?>>12</option>
																				</select>
																				<b>:</b>
																				<select name="to-minute">
																					<option>Minuto</option>
																					<option <?php if($to_minute == '00') echo 'selected'; ?>>00</option>
																					<option <?php if($to_minute == '15') echo 'selected'; ?>>15</option>
																					<option <?php if($to_minute == '30') echo 'selected'; ?>>30</option>
																					<option <?php if($to_minute == '45') echo 'selected'; ?>>45</option>
																				</select>
																				<select name="to-meridian">
																					<option>am - pm</option>
																					<option <?php if($to_meridian == 'pm') echo 'selected'; ?>>pm</option>
																					<option <?php if($to_meridian == 'am') echo 'selected'; ?>>am</option>
																				</select>
																			</p>

																			<?php if(isset($empty_to_hour_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_to_hour_message; ?></s></p>
																			<?php endif; ?>

																			<?php if(isset($empty_to_meridian_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_to_meridian_message; ?></s></p>
																			<?php endif; ?>

																			<?php if(isset($incorrect_reservation_inteval)) : ?>
																			<p class="error-message"><s><?php echo $incorrect_reservation_inteval; ?></s></p>
																			<?php endif; ?>

																		</td>
																	</tr>
																	<tr>
																		<td class="label"><label>Nombre:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $empty_name_error_class; ?>">
																				<span>
																					<input type="text" name="name" value="<?php echo $name; ?>" />
																				</span>
																			</p>
																			<?php if(isset($empty_name_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_name_message; ?></s></p>
																			<?php endif; ?>
																		</td>
																	</tr>
																	<tr><td class="spacer" colspan="2"></td></tr>
																	<tr>
																		<td class="label"><label>Teléfono<br>ó Celular:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $empty_phone_error_classs; ?>">
																				<span>
																					<input type="text" name="phone" value="<?php echo $phone; ?>" />
																				</span>
																			</p>
																			<?php if(isset($empty_phone_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_phone_message; ?></s></p>
																			<?php endif; ?>
																		</td>
																	</tr>
																	<tr><td class="spacer" colspan="2"></td></tr>
																	<tr>
																		<td class="label"><label>E-mail:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $empty_email_error_classs; ?>">
																				<span>
																					<input type="text" name="email" value="<?php echo $email; ?>" />
																				</span>
																			</p>
																			<?php if(isset($empty_email_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_email_message; ?></s></p>
																			<?php endif; ?>
																		</td>
																	</tr>
																	<tr><td class="spacer" colspan="2"></td></tr>
																	<tr>
																		<td class="label notes"><label>Información Adicional</label></td>
																		<td>
																			<div class="text-area-2">
																				<div class="top">
																					<textarea name="extra-notes"><?php echo $extra_notes; ?></textarea>
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
																				<button class="submit" name="submit"><span>Enviar Reservación</span></button>
																			</div>
																		</td>
																	</tr>
																</table>
															</div><!-- END .reservations-wrapper -->
														</form>
													<?php else: ?>
														<h3>Aviso de Privacidad.</h3>
														<p>Los datos solicitados en este formulario son solo para confirmar su reservación por Correo Electrónico ó por Teléfono, por lo tanto no se le dará un uso inadecuado por parte de Zazón Restaurant Bar.</p>
														<div class="success">
															<p><b>Gracias</b></p>
															<p>Tu reservación ha sido enviada</p>
														</div>
														<div>
														<?php 
															if(isset($_POST['submit'])) {
																$output = "Fecha: " . $date . "<br>";
																$output .= "De: " . $from_hour . ":" . $from_minute . " " . $from_meridian ." a ";
																$output .= $to_hour . ":" . $to_minute . " " . $to_meridian . "<br>";
																$output .= "Nombre: " . $name . "<br>";
																$output .= "Teléfono: " . $phone . "<br>";
																$output .= "Email: " . $email . "<br>";
																$output .= "Notas Extras: " . $extra_notes . "<br>";
																echo $output;
															}
														?>	
													</div>
													<?php endif; ?>
												</div><!-- END .post -->
												<div class="clear"></div>
												<p class="show-all last"><a href="/"><span>Volver a Inicio</span></a></p>
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
								<td class="main-content-wrapper-bottom"><p class="back-top"><a href="#top"><span>Ir hacia arriba</span></a></p></td>
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