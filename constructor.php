<?php 
 class person{
	public $name,$address;
	 function __construct($name="Default",$address="Default Address") {
		$this->name=$name;
		$this->address=$address;
	 }
	 function showData(){
		echo($this->name." ".$this->address."<br>");
	 }

 }

 $p1 = new person();
 $p2=new person($name="Bikram",$address="ktm");
//  $p1->name="Hehe";
//  $p1->address="huhu";
 $p1->showData();
 $p2->showData();

?>