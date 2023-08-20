<?php
class shape{

    public $radius,$height,$waight;
    public function CircleArea()
    {
        return 3.1416 *pow($this->radius,2);
    }
    public function rectangleArea()
    {
        return $this->waight *$this->height;
    }

}
class Circle extends shape {
    
    public function __construct($radius)
    {
        $this->radius=$radius;
    }
    
}
class rectangle extends shape{
   
    public function __construct($height,$waight)
    {
        $this->height=$height;
        $this->waight=$waight;
    }
    
}

$circle=new Circle(5);
$circle->CircleArea();

$rectangles=new rectangle(7,8);

echo "Circle Area: " . $circle->CircleArea(). PHP_EOL;
echo "Rectangle Area: " . $rectangles->rectangleArea(). PHP_EOL;




?>