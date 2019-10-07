<?php


class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return array($this->xSpeed, $this->ySpeed);
    }

    public function toString()
    {
        parent::toString();
        echo "X Speed is " . $this->xSpeed;
        echo "<br>";
        echo "Y Speed is " . $this->ySpeed;
        echo "<br>";
        echo "move is " . $this->move();
    }

    public function move(){
        echo "change speed X is ".$this->x += $this->xSpeed;
        echo "<br>";
        echo "change speed y is ". $this->y += $this->ySpeed;
        echo "<br>";
    }
}