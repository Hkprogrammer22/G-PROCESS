<?php
	
	session_start();

	unset($_SESSION['name']);
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset($_SESSION['number_phone']);
	unset($_SESSION['email']);
	
	header('Location:../../../index.php');
	
?>