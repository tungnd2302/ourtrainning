<?php 
	session_start();
	echo '<pre>';	
	print_r($_SESSION);
	session_unset();
	echo '<pre>';	
	print_r($_SESSION);
?>