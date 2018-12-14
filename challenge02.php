<?php

class Mobile {

	var $color;
	var $price;
	var $size;
	var $dualsim;

		function shape(){
		return $this->color.' '. $this->price .' '. $this->size .' '. $this->dualsim;
	  }

	
}


class Feature extends Mobile{

	

}

class Smart extends Mobile{

	 var $fingerprint;
	 var $fastcharging = 'always';

	 function SmartMobile(){
	 	return $this->fingerprint. ' '.$this->fastcharging;
	 }



}

$n = new Feature;
$n->color = 'white';
$n->price = 2000;
$n->dualsim = 'no';
echo 'feature :' . $n->shape() . '<br>';

$m = new Smart;
$m->color = 'black';
$m->price = 12000;
$m->dualsim = 2;
$m->size = 5.5;
$m->fingerprint = 'yes';
$m->fastcharging ;
echo $m->shape(). '<br>';
echo $m->SmartMobile();




?>


