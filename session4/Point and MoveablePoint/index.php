<?php

include_once "point.php";
include_once "MoveablePoint.php";

$point = new Point(2, 3);
$movable = new MovablePoint(2, 3, 5, 7);

$movable->toString();
$movable->move();