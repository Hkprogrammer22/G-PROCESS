<?php
class user{
private $name;
private $login;
private $password;
private $number_phone;
private $email;
	/** 
    construtor
    **/
	function __construct($name, $login, $password, $number_phone, $email){
		$this->name = $name;
		$this->login = $login;
		$this->password = $password;
		$this->number_phone = $number_phone;
		$this->email = $email;
	}
  
}

?>