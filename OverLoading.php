<?php 
interface Shape{
	public function findArea();
}
class Circle implements Shape{
    private $radius;

	public function __construct($radius){
		$this->radius=$radius;
	}

	function findArea(){
		return $this->radius*$this->radius*pi();
	}


}

class Rectangle implements Shape{
	private $width,$height;

	public function __construct($width,$height){
		$this->width=$width;
		$this->height=$height;
	}

	public function findArea(){
		return $this->width*$this->height;
	}
}
$circle = new Circle(100);
$rectangle  = new Rectangle(20,30);
$value = $circle->findArea();

echo("The area of circle is ".round($circle->findArea(),2)."<br>");
echo("The area of reactangle is ".$rectangle->findArea());

?>