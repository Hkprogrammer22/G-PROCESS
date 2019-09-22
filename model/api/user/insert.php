<?php
	//Inclusão das Classes
	include('../../classes/user.php');
	include('../../classes/db.php');
	//Variáveis
	$name = $_POST['name'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$number_phone = $_POST['number_phone'];
	$email = $_POST['email'];
	//Objetos
	$user = new user($name, $login, $password, $number_phone, $email);
	
	$db = new db();
	$db->insert($user);
	
?>
