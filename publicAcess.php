<?php   
class A{
	public $name;
	public function __construct($name){
   $this->name=$name;

	}

	public function show(){
		echo"Hello ".$this->name."<br>";
	}
}

class B extends A{
	public function getData(){
		echo"Your name is".$this->name."<br>";
	}
	
}
$obj = new B("Bikram Gyawali");
$obj->show();
$obj->getData();

?>