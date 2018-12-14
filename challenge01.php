<?php
class Bicycle{
	var $brand;
	var $model;
	var $year ;
	var $description = 'Latest one';
	var $weight_kg = 0.0;

 function name(){
 	return $this->brand . " " . $this->model . " (" . $this->year . ")";
 }	

  function weight_lbs(){
  	return floatval($this->weight_lbs) * 2.2046;
  }

  function set_weight_lbs($value){
  	$this->weight_kg = floatval($value) / 2.2046;
  }
}

 $b1 = new Bicycle;
 $b1->brand = 'hero';
 $b1->model = 'New';
$b1->year = '2015';
 $b1->weight_lbs = 10.1;

 $b2 = new Bicycle;
 $b2->brand = 'altas';
 $b2->model = 'old';
$b2->year = '2012';
 $b2->weight_lbs = 15.1;

 echo $b1->name() ."<br />";
 echo $b2->name() ."<br />";

 echo $b1->weight_kg . "<br />";
 echo $b2->weight_lbs() . "<br />";

 $b1->set_weight_lbs(2);
  echo $b1->weight_kg . "<br />";
  echo $b1->weight_lbs() . "<br />";



?>