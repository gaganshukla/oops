<?php
class Student{
  public $first_name;
  public $last_name;
  public $country = 'None';

  protected $registration_id;
  private $tution =0.00;

  public function full_name(){
  	return $this->first_name . " " . $this->last_name;
  }

    public function hello_world(){
    return 'Hello World!';
  }

    protected function hello_family(){
    return 'Hello World!';
  }

    private function hello_me(){
    return 'Hello World!';
  }

}


class PartTimeStudent extends Student{
  public function hello_parent(){
    return $this->hello_family();
  }

}

//$student1 = new Student;
$student1 = new PartTimeStudent;
 $student1->first_name = 'Gagan';
 $student1->last_name = 'shukla';

//echo $student1->registration_id."<br />";
//echo $student1->tution."<br />";

echo $student1->hello_parent()."<br />";

echo $student1->hello_world() . "<br />";
//echo $student1->hello_family() . "<br />";

//echo $student1->hello_me() . "<br />";

$student1->tution = 1000;
echo $student1->tution."<br />";

// get_class_method check the the class
$class_methods = get_class_methods('Student');
echo "Class Methods: " . implode(',', $class_methods) . "<br />";

	


?>