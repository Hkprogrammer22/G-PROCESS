<?php
class functionality{
private $idsprint;
private $name;
private $priority;
private $status;

	/** 
    construtor
    **/
	function __construct($idsprint, $name, $priority, $status){
		$this->idsprint = $idsprint;
		$this->name = $name;
		$this->priority = $priority;
		$this->status = $status;
	}
  
}

?>