<?php
function divison($u,$l){
	try {
		if($l<=0){
			throw new Exception("Please enter a valid number");
		}
		$div=$u/$l;
		echo $div;
	} catch (Exception $e) {
	  echo	$e->getMessage();
		
	}
}
divison(2,0);
?>