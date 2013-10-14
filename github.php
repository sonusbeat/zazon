<?php 
	if ( $_POST['payload'] ) {
		$output = shell_exec('git pull && git status');
		echo "<pre>".$output."</pre>";
	}
?>