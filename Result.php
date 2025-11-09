<?php
$englis=100;
$math=100;
$java=100;
$stat=90;
$Dsa=100;

$percentage=($englis+$math+$java+$stat+$Dsa)/5;

if ($percentage>=90) 
	echo("You get A+" ." &nbsp &nbsp &nbsp"  .$percentage);

else if($percentage>=80 && $percentage<90) echo("You get A"   .$percentage);
else if($percentage>=70 && $percentage<80)   echo("You get B+"   .$percentage);
else if($percentage>=60 && $percentage<70)   echo("You get B"   .$percentage);
else if($percentage>=50 && $percentage<60)   echo("You get C+"   .$percentage);
else if($percentage>=40 && $percentage<50)   echo("You get C"   .$percentage);
else echo("You failed in exam")


?>