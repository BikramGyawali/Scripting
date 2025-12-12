<?php
$state=$_GET['state'];
$Koshi= [
      "Bhojpur",
      "Dhankuta",
      "Ilam",
      "Jhapa",
      "Khotang",
      "Morang",
      "Okhaldhunga",
      "Panchthar",
      "Sankhuwasabha",
      "Solukhumbu",
      "Sunsari",
      "Taplejung",
      "Terhathum",
      "Udayapur"
];
$Madesh=[
      "Bara",
      "Dhanusha",
      "Mahottari",
      "Parsa",
      "Rautahat",
      "Saptari",
      "Sarlahi",
      "Siraha"
];
$Bagmati=[
      "Bara",
      "Dhanusha",
      "Mahottari",
      "Parsa",
      "Rautahat",
      "Saptari",
      "Sarlahi",
      "Siraha"
];

if($state=="Koshi"){
	foreach($Koshi as $district){
		echo "<option>$district </option>";
	}
}
else if($state=="Madesh"){
	foreach($Madesh as $district){
		echo "<option>$district </option>";
	}
}
else if($state=="Bagmati"){
	foreach($Bagmati as $district){
		echo "<option>$district </option>";
	}
}
else{
	echo"Please select a state"
}
?>