<?php
include_once "Shape.php";
include_once "Triangle.php";

$triangle = new Triangle("triangle1998",6 ,8,10);
echo $triangle->show();
echo "<br>";
$triangle->toString();