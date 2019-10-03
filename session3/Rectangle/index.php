<?php
include "rectangle.php";

$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width;
echo $rectangle->height;

$rectangle->width = 20;
$rectangle->height = 30;

echo $rectangle->width;
echo $rectangle->height;
echo $rectangle->getPerimeter();
echo $rectangle->getArea();
echo ("Your Rectangle".$rectangle->display());