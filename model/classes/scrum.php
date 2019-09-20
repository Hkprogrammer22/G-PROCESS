<?php
class scrum{
private $idproject;
private $product_owner;
private $scrum_master;
private $sprint_amount;

	/** 
    construtor
    **/
	function __construct($idproject, $product_owner, $scrum_master, $sprint_amount){
		$this->idproject = $idproject;
		$this->product_owner = $product_owner;
		$this->scrum_master = $scrum_master;
		$this->sprint_amount = $sprint_amount;
	}
  
}

?>