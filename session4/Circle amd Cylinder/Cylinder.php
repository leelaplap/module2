<?php
include_once("Circle.php");

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function cylinderVolume()
    {
        return parent::circleArea() * $this->height * 2;
    }
}
