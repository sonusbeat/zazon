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
														<form action="reservaciones.php" method="post">
															<div class="reservations-wrapper">
																<table class="reservations">
																		
																	<?php if(isset($form_error) && $form_error == true): ?>
																	<tr>
																		<td colspan="2">
																			<div class="top-error-message">
																				Hay Errores en su Reservación
																			</div>
																		</td>
																	</tr>
																	<?php endif; ?>

																	<tr>
																		<td class="label"><label>Fecha:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $empty_date_error_class; ?>">
																				<span>																				
																					<input type="date" size="8" class="date" name="date" 
																						value="<?php echo $date; ?>">
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

																			<?php if(isset($empty_from_hour_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_from_hour_message; ?></s></p>
																			<?php endif; ?>

																			<?php if(isset($empty_from_meridian_message)) : ?>
																			<p class="error-message"><s><?php echo $empty_from_meridian_message; ?></s></p>
																			<?php endif; ?>

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
																			<p class="input-text-1 <?php echo $error_class; ?>">
																				<span>
																					<input type="text" name="name" value="<?php echo $name; ?>" />
																				</span>
																			</p>
																			
																			<?php if(isset($empty_name_message)) : ?>
																				<p class="error-message"><s><?php echo $empty_name_message; ?></s></p>
																			<?php endif; ?>

																			<?php if(isset($name_length_value_error_message)) : ?>
																				<p class="error-message">
																					<s><?php echo $name_length_value_error_message; ?></s>
																				</p>
																			<?php endif; ?>

																		</td>
																	</tr>
																	<tr><td class="spacer" colspan="2"></td></tr>
																	<tr>
																		<td class="label"><label>Teléfono<br>ó Celular:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $error_class; ?>">
																				<span>
																					<input type="text" name="phone" value="<?php echo $phone; ?>" />
																				</span>
																			</p>

																			<?php if(isset($empty_phone_message)) : ?>
																				<p class="error-message"><s><?php echo $empty_phone_message; ?></s></p>
																			<?php endif; ?>

																			<?php if(isset($phone_integer_error)) : ?>
																				<p class="error-message"><s><?php echo $phone_integer_error; ?></s></p>
																			<?php endif; ?>	

																			<?php if(isset($phone_length_value_error_message)) : ?>
																				<p class="error-message">
																					<s><?php echo $phone_length_value_error_message; ?></s>
																				</p>
																			<?php endif; ?>

																		</td>
																	</tr>
																	<tr><td class="spacer" colspan="2"></td></tr>
																	<tr>
																		<td class="label"><label>E-mail:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $error_class; ?>">
																				<span>
																					<input type="text" name="email" value="<?php echo $email; ?>" />
																				</span>
																			</p>

																			<?php if(isset($empty_email_message)) : ?>
																				<p class="error-message"><s><?php echo $empty_email_message; ?></s></p>
																			<?php endif; ?>

																			<?php if(isset($email_format_message)) : ?>
																				<p class="error-message"><s><?php echo $email_format_message; ?></s></p>
																			<?php endif; ?>

																		</td>
																	</tr>
																	<tr><td class="spacer" colspan="2"></td></tr>
																	<tr>
																		<td class="label"><label>Número de Personas:</label></td>
																		<td>
																			<p class="input-text-1 <?php echo $error_class; ?>">
																				<span class="quantity">
																					<input type="text" name="people-quantity" value="<?php echo $people_quantity; ?>" maxlength = "5" />
																				</span>
																			</p>

																			<?php if(isset($empty_people_quantity_message)) : ?>
																				<span class="error-message-quantity">
																					<s><?php echo $empty_people_quantity_message; ?></s>
																				</span>
																			<?php endif; ?>

																			<?php if(isset($zero_quantity_people_message)) : ?>
																				<span class="error-message-quantity">
																					<s><?php echo $zero_quantity_people_message; ?></s>
																				</span>
																			<?php endif; ?>																			

																			<?php if(isset($intval_quantity_people_message)) : ?>
																				<span class="error-message-quantity">
																					<s><?php echo $intval_quantity_people_message; ?></s>
																				</span>
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
														<h3>Reservación Enviada</h3>
														<div class="success">
															<p><b>Gracias</b></p>
															<p>Tu reservación ha sido enviada</p>
															<p>Uno de nuestros representantes se pondrá en contacto con usted para confirmar su reservación lo más pronto posible</p>
														</div>
													<?php endif; ?>
												</div><!-- END .post -->
												<div class="clear"></div>
											</div><!-- END .left-side -->
											<div class="right-side">
												<div class="sidebar-block-1">
													<div class="title"><h3>Realiza tu Reservación</h3></div>
													<div class="basic-1">
														<p>Seleccione la Fecha, Hora de Inicio y Final de su Reservación así como también escriba su Nombre Completo, Teléfono ó Celular, Email.</p>
														<p>Si tiene algunas Especificaciones Adicionales para su Reservación escribalas en el campo de Información Adicional.</p>
														<h4>Privacidad</h4>
														<p>Los datos que envies solo serán utilizados para confirmar tu Reservación por medio del Teléfono Fijo ó Celular y también se enviará una confirmación de tu Reservación a su Correo Electrónico</p>
														<p class="last"><span>(33) 12-04-98-06</span></p>
													</div><!-- END .basic-1 -->
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