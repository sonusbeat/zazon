<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') :

	$date = $_POST['date'];
	$post_array = [$date];


else:
	$post_array = [];
endif;

?>