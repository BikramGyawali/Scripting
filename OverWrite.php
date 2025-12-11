<?php
class Add {
	 public function calculate($a,$b){
		return $a*$b;
	 }
}
class Subtract extends Add{
	public function calculate($a,$b){
		return $a-$b;
	}
}

// $operation =new Add();
$operation =new Subtract();
echo $operation->calculate(4,3);
?>