<?php

include_once "point2D.php";
include_once "point3D.php";

$point2D = new Point2D(6,7);
$point2D->toString();
echo "<br>";

$point3D = new Point3D(1,2,3);
$point3D->toString();