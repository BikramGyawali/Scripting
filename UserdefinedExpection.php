<?php
class myException extends Exception{
	function errorMessage(){
		$error="My Exception message".$this->getMessage();
		$error.= "<br> Error in line no .".$this->getLine();
		return $error;
	}
}
	function divison($n){
		try {
			if($n<=0){
	throw new myException		("<br> Enter valid number");
			return;
		}
		if($n<=3){
		throw new myException		("Enter  number greater than 3");
			return;
		}
		$div=2/$n;
		echo "<br>".$div;
		} catch (myException $e) {
			echo $e->errorMessage();
		}
		catch (Exception $e){
			echo $e->getMessage();
		}
	}



divison(3);
?>