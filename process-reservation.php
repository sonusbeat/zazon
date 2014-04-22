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

	if(empty($date)):
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
		$empty_to_meridian_message = 'Elija am ó pm de la hora de Finalización';
	else:
		$empty_to_meridian_message = null;
	endif;

	if(empty($name)):
		$form_error = true;
		$empty_name_message = 'Debe escribir su Nombre';
		$empty_name_error_class = 'input-text-1-error';
	else:
		$empty_name_message = null;
		$empty_name_error_class = '';
	endif;

	if(empty($phone)):
		$form_error = true;
		$empty_phone_message = 'Debe Escribir su Teléfono ó Celular';
		$empty_phone_error_classs = 'input-text-1-error';
	else:
		$empty_phone_message = null;
		$empty_phone_error_classs = '';
	endif;

	if(empty($email)):
		$form_error = true;
		$empty_email_message = "Escriba su Email";
		$empty_email_error_classs = 'input-text-1-error';
	else:
		$empty_email_message = null;
		$empty_email_error_classs = '';
	endif;

	if(!$form_error) :
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