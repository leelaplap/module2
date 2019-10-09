<?php

class Fan
{
    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    public function __construct($speed, $on, $radius, $color)
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }


    public function getSpeed()
    {
        if ($this->speed == 1) {
            return "SLOW";
        } elseif ($this->speed == 2) {
            return "MEDIUM";
        } elseif ($this->speed == 3) {
            return "FAST";
        }
    }


    public function toString()
    {
        if ($this->on == true) {
            echo "Speed is: " . $this->getSpeed() . "<br>";
            echo "Color is: " . $this->color . "<br>";
            echo "Radius is: " . $this->radius . "<br>";
            echo "fan is on" . "<br>";
        } else {
            echo "Color is: " . $this->color . "<br>";
            echo "Radius is: " . $this->radius . "<br>";
            echo "fan is off";
        }
    }
}

$fan1 = new Fan(2, true, 5, "green");
$fan1->toString();

