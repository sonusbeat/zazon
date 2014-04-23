<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') :

	$date          = isset($_POST['date']) ? $_POST['date'] : '' ;
	$from_hour     = isset($_POST['from-hour']) ? $_POST['from-hour'] : '' ;
	$from_minute   = isset($_POST['from-minute']) ? $_POST['from-minute'] : '' ;
	$from_meridian = isset($_POST['from-meridian']) ? $_POST['from-meridian'] : '' ;
	$to_hour       = isset($_POST['to-hour']) ? $_POST['to-hour'] : '' ;
	$to_minute     = isset($_POST['to-minute']) ? $_POST['to-minute'] : '' ;
	$to_meridian   = isset($_POST['to-meridian']) ? $_POST['to-meridian'] : '' ;
	$name          = isset($_POST['name']) ? trim($_POST['name']) : '' ;
	$phone         = isset($_POST['phone']) ? trim($_POST['phone']) : '' ;
	$email         = isset($_POST['email']) ? trim($_POST['email']) : '' ;
	$extra_notes   = isset($_POST['extra-notes']) ? trim($_POST['extra-notes']) : '' ;

	# ---- Validación ---- #

	$form_error = false;
	$form_submited = false;

	if(!isset($date) || $date === ''):
		$form_error = true;
		$empty_date_message = 'Elija la Fecha de Reservación';
		$empty_date_error_class = 'input-text-1-error';
	else:
		$empty_date_error_class = '';
		$empty_date_message = null;
	endif;

	if($from_hour == 'Hora'):
		$form_error = true;
		$empty_from_hour_message = 'Elija la Hora de Inicio de su Reservación';
	else:
		$empty_from_hour_message = null;
	endif;

	if($from_hour == '0'):
		$from_meridian = 'AM';
	endif;

	if($from_minute == 'Minuto'):
		$from_minute = '00';
	endif;

	if(!isset($empty_from_hour_message) && $from_meridian == 'am - pm'):
		$form_error = true;
		$empty_from_meridian_message = 'Elija am ó pm de la Hora de Inicio';
	endif;

	if(!isset($empty_from_hour_message) && !isset($empty_from_meridian_message) && $to_hour == 'Hora'):
		$form_error = true;
		$empty_to_hour_message = 'Elija la Hora Final de su Reservación';
	else:
		$empty_to_hour_message = null;
	endif;

	if($to_hour == '0'):
		$to_meridian = 'AM';
	endif;

	if (!isset($empty_from_hour_message)) :
		if((($to_hour < $from_hour) || ($to_hour == $from_hour)) && ($from_meridian == $to_meridian)):
			$incorrect_reservation_inteval = 'Intervalo de Duración de Reservación Incorrecto';
			$form_error = true;
		endif;
	endif;

	if($to_minute == 'Minuto'):
		$to_minute = '00';
	endif;

	if(!isset($empty_from_hour_message) && !isset($empty_to_hour_message) && !isset($empty_from_meridian_message) && $to_meridian == 'am - pm'):
		$form_error = true;
		$empty_to_meridian_message = 'Elija am ó pm de la hora de Finalización';
	else:
		$empty_to_meridian_message = null;
	endif;

	if(!isset($name) || $name === ''):
		$form_error = true;
		$empty_name_message = 'Debe escribir su Nombre';
		$error_class = 'input-text-1-error';
	else:
		$empty_name_message = null;
		$error_class = '';
	endif;

	if(!isset($empty_name_message)):

		if (strlen($name) <= 3):
			$form_error = true;
			$name_length_value_error_message = 'Su nombre debe ser mayor a 3 caracteres';
			$error_class = 'input-text-1-error';
		elseif(strlen($name) > 30):
			$form_error = true;
			$name_length_value_error_message = 'Su nombre no debe ser menor a 30 caracteres';
			$error_class = 'input-text-1-error';
		else:
			$name_max_value_error_message = null;
			$name_max_value_error_class = '';
		endif;

	endif;


	if(!isset($phone) || $phone === ''):
		$form_error = true;
		$empty_phone_message = 'Escriba su Número Teléfonico ó Celular';
		$error_classs = 'input-text-1-error';
	else:
		$empty_phone_message = null;
		$error_classs = '';
	endif;

	if(!isset($empty_phone_message)):

		if(!intval($phone)) :
			$form_error = true;
			$phone_integer_error = "Escriba solo números";
			$error_class = 'input-text-1-error';
		else:
			$phone_integer_error = null;
			$error_class = '';
		endif;

		if(!isset($phone_integer_error)):

			if(strlen($phone) < 6):
				$form_error = true;
				$phone_length_value_error_message = 'Debe ser mayor a 5 Dígitos';
				$error_class = 'input-text-1-error';
			elseif(strlen($phone) > 12):
				$form_error = true;
				$phone_length_value_error_message = 'Debe ser menor a 12 Dígitos';
				$error_class = 'input-text-1-error';
			else:
				$phone_length_value_error_message = null;
				$error_class = '';
			endif;

		endif;

	endif;

	if(!isset($email) || $email === ''):
		$form_error = true;
		$empty_email_message = "Escriba su Email";
		$error_classs = 'input-text-1-error';
	else:
		$empty_email_message = null;
		$error_classs = '';		
	endif;
	
	if(!isset($empty_email_message)):
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			$form_error = true;
			$email_format_message = "Formato de Email Incorrecto";
			$error_classs = 'input-text-1-error';
		else:
			$email_format_message = null;
			$error_classs = '';
		endif;
	endif;

	if(!$form_error) :				

		if(!isset($extra_notes) || $extra_notes === ''):
			$extra_notes = 'Ninguna Información Adicional Enviada';
		endif;

		# Email Recipients
    $to = "reservaciones@zazon.mx";

    # Email Subject
    $subject = "Reservación de Zazon.mx Enviada a las ".strftime("%T", time());

    #Email Message
    
    $mail = "<b>Fecha de Reservación: </b>{$date}<br />";
    $mail .= "<b>Hora de Inicio: </b>{$from_hour}:{$from_minute} {$from_meridian}<br />";
    $mail .= "<b>Hora de Finalización: </b>{$to_hour}:{$to_minute} {$to_meridian}<br />";
    $mail .= "<b>Nombre: </b>{$name}<br />";
    $mail .= "<b>Teléfono/Celular: </b>{$phone}<br />";
    $mail .= "<b>Email: </b>{$email}<br />";
    $mail .= "<b>Información Adicional: </b>{$extra_notes}<br />";
    $mail = wordwrap($mail, 70);

    # Email From
    $from = "{$email}";

    #Email Headers
    $headers = "From: {$from}\n";
    $headers .= "Reply-To: {$from}\n";
    $headers .= "X-Mailer: PHP/".phpversion()."\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: text/html; charset=UTF-8";

    # Sending Email
    mail($to, $subject, $mail, $headers);

    # Confirm Reservation
    $form_submited = true;

	endif;

else:
	$date          = '' ;
	$from_hour     = '' ;
	$from_minute   = '' ;
	$from_meridian = '' ;
	$to_hour       = '' ;
	$to_minute     = '' ;
	$to_meridian   = '' ;
	$name          = '' ;
	$phone         = '' ;
	$email         = '' ;
	$extra_notes   = '' ;
	$form_error = false;
	$form_submited = false;
endif;

?>