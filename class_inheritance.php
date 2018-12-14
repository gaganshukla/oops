<?php

class User{

	var $is_admin = false;

	var $first_name;
	var $last_name;
	var $username;

	function fullname(){
		return $this->first_name . " " . $this->last_name;
	}
}

class Customer extends User{

	var $city;
	var $state;
	var $country;

	function location(){
		return $this->city. ", " . $this->state. ", ". $this->country;
	}

}

class AdminUser extends User{
	var $is_admin = true;

	function fullname(){
		return $this->first_name . " " . $this->last_name . "(admin)";
	}
 }


$u = new User;
$u->first_name = 'Gagan';
$u->last_name = 'Shukla';
$u->username = 'gs';

$c = new Customer;
$c->first_name = 'Deepak';
$c->last_name = 'jain';
$c->username = 'dj';
$c->city = 'indore';
$c->state = 'mp';
$c->country = 'india';

echo $u->fullname().'<br />';
echo $c->fullname().'<br />';

echo $c->location().'<br />';

// get_parent_class is a predefined function that check that an object has its parent class or not. 
echo get_parent_class($c).'<br />';
echo get_parent_class($u).'<br />';

// is_subclass_of check the instance of an object of a parent class
// it takes true parameter first is instance and second is name of the class
if(is_subclass_of($c, 'User')){
	echo "Instance is a subclass of user.<br />";
}

// class_parents function check the parent class of an instances. 
$parents = class_parents($c);
echo implode(' ,', $parents).'<br />';





?>