<?php

class MenuItem {

   //private $itemname = "steak";
   //private $desc = "Fresh flame broiled AAA Angus beef done to perfection.";
   //private $price = "$49.99";

   private $itemname = "";
   private $idat = "";
   private $desc = "";
   private $price = "";

   function __construct($param1, $param2, $param3 ,$param4) {
      $this->itemname = $param1;
	  $this->idat = $param2;
      $this->desc = $param3;
      $this->price = $param4;
   }

   function get_menuitem() {

      return $this->itemname;
   }
   
   function get_idat() {

      return $this->idat;
   }

   function get_desc() {

      return $this->desc;
   }

   function get_price() {

      return $this->price;
   }
}

?>

