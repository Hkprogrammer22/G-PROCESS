<?php
class mission{
private $idproject;
private $name;
private $partners;

	/** 
    construtor
    **/
	function __construct($idproject, $name, $partners){
		$this->idproject = $idproject;
		$this->name = $name;
		$this->partners = $partners;
	}
  
}

?>