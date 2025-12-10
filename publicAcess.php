<?php   
class A{
	protected $name;
// 	 function __construct($name){
//    $this->name=$name;

// 	}

	public function show(){
		echo"Hello ".$this->name."<br>";
	}
}
$obj = new A();
$obj->name="Bikram Gyawali";
$obj->show();
class B extends A{
	public function getData(){
		echo"Your name is".$this->name."<br>";
	}
	
}

// $obj->getData();

?>