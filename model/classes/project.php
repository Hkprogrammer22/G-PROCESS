<?php
class project{
public $iduser;
public $partners;
public $name;
public $method;
	/** 
    construtor
    **/
	function __construct($iduser, $partners, $name, $method){
		$this->iduser = $iduser;
		$this->partners = $partners;
		$this->name = $name;
		$this->method = $method;
	}
  
}

?>