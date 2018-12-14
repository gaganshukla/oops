<?php

// example of extending parent's static method
// Add code before, after or around
Class Chef{

	public static function make_dinner(){
		echo "cook food.<br/>";
	}

}

Class AmetureChef extends Chef{

	public static function make_dinner(){
		echo "cook recipe.<br/>";
		parent::make_dinner();
		echo "clean up mess.<br />";
	}

}

echo "chef : <br/>";
Chef::make_dinner();
echo "<br/>";
echo "Ameture Chef: <br />";
AmetureChef::make_dinner();

echo "<hr />";

// Example of using parent static method

class Image{

	public static $resize_enabled = true;

	public static function geometry(){
		echo "800*800";
	}

}

class ProfileImage extends Image{

	public static function geometry(){
		if(self::$resize_enabled){
			echo "100*100";
		}else{
			parent::geometry();
		}
	}
}

echo Image::geometry()."<br />";
echo ProfileImage::geometry()."<br />";

echo Image::$resize_enabled = false;
echo ProfileImage::geometry()."<br/>";

?>