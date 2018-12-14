<?php
class Student{
  var $first_name;
  var $last_name;
  var $country = 'None';

}

$student1 = new Student;
 $student1->first_name = 'Gagan';
 $student1->last_name = 'shukla';

$student2 = new Student;
 $student2->first_name = 'vicky';
 $student2->last_name = 'm';

echo $student1->first_name . " " .$student1->last_name ."<br/ >";
echo $student2->first_name . " " .$student2->last_name ."<br/ >";

// get_class_vars check the property of class
$class_vars = get_class_vars('Student');
echo "Class Vars:<br />";
echo "<pre>";
 print_r($class_vars);
 echo "</pre>";	

// get_object_vars check the property of an object
$object_vars = get_object_vars($student2);
echo "Object Vars:<br />";
echo "<pre>";
 print_r($object_vars);
 echo "</pre>";	

// property_exists check the property of a class
 if(property_exists('Student', 'first_name')){
 	echo "property first_name exists.<br />";
 }else{
 	echo "property first_name does not exists.<br />";
 }
?>