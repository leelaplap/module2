<?php
include_once ("Circle.php");
include_once ("Cylinder.php");

$circle = new Circle(5,"red");
echo "the color circle is ".$circle->getColor()."<br>";
$circle->setColor("pink");
echo "the area circle is ".$circle->circleArea()."<br>";
echo "the new color is ".$circle->getColor()."<br>";


$cylinder = new Cylinder(9, "yellow", 20);
echo "the color cylinder is ".$cylinder->circleArea()."<br>";
echo "the volume cylinder is ".$cylinder->cylinderVolume()."<br>";
echo "the color cylinder is ".$cylinder->getColor()."<br>";
echo "the radius cylinder is ".$cylinder->getRadius()."<br>";
