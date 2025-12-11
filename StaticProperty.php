<?php
 class A{
	 public static $name= "Bikram Gyawali";
public static function show()
{
echo	self::$name;  // we can also use the class name in the place of self. Self is a scope resolution
}

}
echo  A::$name;
echo"<br>";
A::show()
?>