<?php

// static keyword used for late static binding which mean its run at runtime 
class Sofa{
	protected static $identity = "Sofa class";

	public static function identity_test(){
		echo 'self :' .self::$identity."<br />";
		echo 'static :' .static::$identity."<br />";

		echo 'get class :' .get_class()."<br />";
		echo 'get called class :' .get_called_class()."<br />";
	}

}
class LoveSeat extends Sofa{	
	protected static $identity = "LoveSeat class";
}

Sofa::identity_test();
echo "<hr />";
LoveSeat::identity_test();

 ?>