<?php
class Student{
  var $first_name;
  var $last_name;
  var $country = 'None';

  function say_hello(){
  	return 'Hello World!';
  }

  function full_name(){
  	return $this->first_name . " " . $this->last_name;
  }

}

$student1 = new Student;
 $student1->first_name = 'Gagan';
 $student1->last_name = 'shukla';

$student2 = new Student;
 $student2->first_name = 'vicky';
 $student2->last_name = 'm';

echo $student1->full_name()."<br />";

echo $student1->say_hello() . "<br />";
echo $student2->say_hello() . "<br />";

// get_class_method check the the class
$class_methods = get_class_methods('Student');
echo "Class Methods: " . implode(',', $class_methods) . "<br />";

	

// property_exists check the property of a class
 if(method_exists('Student', 'say_hello')){
 	echo "Method say_hello() exists in student class.<br />";
 }else{
 	echo "Method say_hello() does not exists in student class<br />";
 }
?>