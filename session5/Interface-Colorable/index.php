<?php
include_once "Colorable.php";
include_once "Square.php";

$squareOne = new Square(1);
$squareTwo = new Square(2);
$squareThree = new Square(3);
$squareFour = new Square(4);
$squareFive = new Square(5);

$squares = [];
array_push($squares, $squareOne, $squareTwo, $squareThree, $squareFour, $squareFive);

for ($i = 0; $i < count($squares); $i++) {
    echo $squares[$i]->toString()."<br>";
}
