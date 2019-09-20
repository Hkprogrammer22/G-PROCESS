<?php
class phase{
private $idproject;
private $name;
private $attachment;

	/** 
    construtor
    **/
	function __construct($idproject, $name, $attachment){
		$this->idproject = $idproject;
		$this->name = $name;
		$this->attachment = $attachment;
	}
  
}

?>