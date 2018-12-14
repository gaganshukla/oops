<?php

class Student{

	public static $name = ['gagan','rajat','om'];
	private static $total_students = 0;

	public static function motto(){
		return "To learn oops ";
	}

	public static function count(){
		return self::$total_students; // use self instead of $this
	}

	public function add_student(){
		self::$total_students++;
	}

}

echo Student::$name[0]. '<br />';
echo Student::motto(). '<br />';

//echo Student::$total_students; // error cannot acess private properties 

echo Student::count(). '<br />';
Student::add_student();
echo Student::count(). '<br />';;

// static properties and methods are inherited

class PartTimeStudents extends Student{
}

echo PartTimeStudents::$name[0]. '<br />';
echo PartTimeStudents::motto(). '<br />';

// changes are shared too!
echo PartTimeStudents::$name[] = 'Durgesh';
echo implode(', ', Student::$name).'<br />' ;

Student::add_student();
Student::add_student();
Student::add_student();
PartTimeStudents::add_student(). '<br />';

echo Student::count(). '<br />';
echo PartTimeStudents::count();



?>