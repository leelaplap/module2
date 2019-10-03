<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function get_a()
    {
        return $this->a;
    }

    function get_b()
    {
        return $this->b;
    }

    function get_c()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }

    function getRoot1()
    {
        return (-$this->b + pow($this->getDiscriminant(),0.5)) / 2 * $this->a;
    }

    function getRoot2()
    {
        return (-$this->b - pow($this->getDiscriminant(),0.5)) / 2 * $this->a;
    }
}

$a = 7;
$b = 1;
$c = 1;

$quadraticEquation = new QuadraticEquation($a,$b,$c);

if ($quadraticEquation->getDiscriminant()>=0){
    echo "The equation has 2 solutions is: ".$quadraticEquation->getRoot1()." and ".$quadraticEquation->getRoot2();
} else{
    echo "The equation has no roots";
}