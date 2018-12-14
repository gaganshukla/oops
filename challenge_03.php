<?php
class Bicycle{
	public $brand;
	public $model;
	public $year ;
	public $description = 'Latest one';
	private $weight_kg = 0.0;
  protected $wheels = 2;


  public function name(){
 	return $this->brand . " " . $this->model . " (" . $this->year . ")";
 }	

  public  function weight_lbs(){
  	return floatval($this->weight_lbs) * 2.2046;
  }

 /* public function set_weight_kg($value){
  	$this->weight_kg = floatval($value) / 2.2046;
  } */

  public function wheel_details(){
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

   // getter method 
  public function weight_kg(){
    return $this->weight_kg . ' kg';
  }

  // setter method
   public function set_weight_kg($value){
     $this->weight_kg = floatval($value);
   }
}

class Unicycle extends Bicycle{
  protected $wheels = 1;

  protected function wheel_d(){
    return $this->wheels;
  } 
}

 $b1 = new Bicycle;
 $b1->brand = 'hero';
 $b1->model = 'New';
$b1->year = '2015';
 $b1->weight_lbs = 10.1;

 $b2 = new Unicycle;
 $b2->brand = 'altas';
 $b2->model = 'old';
$b2->year = '2012';
 $b2->weight_lbs = 15.1;

 echo $b1->name() ."<br />";
 echo $b2->name() ."<br />";

 //echo $b1->weight_kg . "<br />";
 echo $b2->weight_lbs() . "<br />";

 //$b1->set_weight_lbs(2);
  //echo $b1->weight_kg . "<br />";
  echo $b1->weight_lbs() . "<br />";

echo "Bicycle " . $b1->wheel_details(). "<br />";
echo "unicycle " . $b2->wheel_details();

?>