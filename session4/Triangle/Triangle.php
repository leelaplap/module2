<?php

class Triangle extends Shape
{
    private $side1 = 1.0;
    private $side2 = 1.0;
    private $side3 = 1.0;


    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea()
    {
        return pow(0.5 * $this->getPerimeter() *
            (0.5 * $this->getPerimeter() - $this->side1) *
            (0.5 * $this->getPerimeter() - $this->side2) * (0.5 * $this->getPerimeter() - $this->side3), 0.5);
    }

    public function toString()
    {
        echo "side 1 is: ".$this->side1."<br>";
        echo "side 2 is: ".$this->side2."<br>";
        echo "side 3 is: ".$this->side3."<br>";
        echo "Triangle has Perimeter is: " . $this->getPerimeter() . "<br>";
        echo "Triangle has Area is: " . $this->getArea() . "<br>";
    }
}