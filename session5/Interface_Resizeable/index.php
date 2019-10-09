<?php

include_once "Rectangle.php";
include_once "Circle.php";
include_once "Square.php";

$rectangle = new Rectangle(1,2);
echo $rectangle->display();
echo "<br>";

$rectangle->resize();
echo $rectangle->display();
echo "<br>";

$circle= new Circle(6);
echo $circle->display();
echo "<br>";

$circle->resize();
echo $circle->display();
echo "<br>";

$square = new Square(6);
echo $square->display();
echo "<br>";

$square->resize();
echo $square->display();
echo "<br>";

?>