<?php
class mission{	
public $id;	
public $name;
public $partners;


	/** 
    construtor
    **/
	function __construct($id, $name, $partners){
		$this->id = $id;
		$this->name = $name;
		$this->partners = $partners;
		
	}
  
}

?>