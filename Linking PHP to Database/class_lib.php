<?php

class MenuItem {   

   private $itemname = "";
   private $dat = "";

   private $ds = "";
   

   private $p = "";

   function __construct($pa1, $pa2, $pa3 ,$pa4) {
      $this->itemname = $pa1;
	  $this->dat = $pa2;

      $this->ds = $pa3;
      $this->p = $pa4;
   }
   

   function get_menuitem() {
      return $this->itemname;
   }
   
   
   function get_dat() {
      return $this->dat;
   }
   

   function get_ds() {
      return $this->ds;
   }

   
   function get_p() {
      return $this->p;
   }
}

?>

