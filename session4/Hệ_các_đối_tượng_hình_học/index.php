<?php

include_once("circle.php");
include_once("cylinder.php");
include_once("rectangle.php");
include_once("square.php");

$circle = new Circle("Circle1", 3);
echo $circle->show()."<br>";
echo "Circle area: " . $circle->calculateArea() . "<br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . "<br><br>";

$cylinder = new Cylinder("Cylinder1", 3, 4);
echo $cylinder->show()."<br>";
echo "Cylinder area: " . $cylinder->calculateArea() . "<br>";
echo "Cylinder perimeter: " . $cylinder->calculateVolume() . "<br><br>";


$rectangle = new Rectangle('Rectangle 1', 3, 4);
echo $rectangle->show()."<br>";
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br><br>';

$square = new Square("Square1", 4, 4, 4);
echo $square->show()."<br>";
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br><br>';