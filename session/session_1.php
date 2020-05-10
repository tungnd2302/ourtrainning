<?php 
	session_start();
	$_SESSION['session_1'] = "Vũ Văn Trọng";
	echo '<pre>';	
	print_r($_SESSION);
?>