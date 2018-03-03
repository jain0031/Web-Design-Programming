<?php

class MenuItem
{ 	private $itemName;
	private $description;
	private $price;
	
	public function MenuItem($name, $desc, $price)
	{
		$this->itemName = $name;
		$this->description = $desc;
		$this->price = $price;
	}
		
	function getname(){
		return $this->itemName;
	}
	
	function getdescription(){
		return $this->description;
	}
	
	function getprice(){
		return $this->price;
	}
}
?>