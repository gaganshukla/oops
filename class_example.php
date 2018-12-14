<?php

class Student{

}

$classes = get_declared_classes();
//print_r(get_declared_classes());

//convert array into string using implode
//echo "Classes: " . implode(', $classes) . "<br />";

$class_names = ['Product','Student', 'student'];
foreach($class_names as $class_name ){
	if(class_exists($class_name)){
        echo "{$class_name} is a declred class.<br />";
		}else{
 		echo "{$class_name} is not a declred class.<br />";
		}
}	


?>