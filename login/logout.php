<?php 
	session_start();
	// session_unset($_SESSION['user']);
	if(isset($_SESSION['user'])){
		unset($_SESSION['user']);
	}else{
		header("Location: ./form.php");
	}
	header("Location: ./form.php");

?>
