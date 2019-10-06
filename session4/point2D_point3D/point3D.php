<?php
class Point3D extends Point2D{
    public $z;

    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z= $z;
    }

    public function getZ(){
        return $this->z;
    }

    public function setZ($z){
        $this->z = $z;
    }

    public function getXYZ(){
        return array($this->x,$this->y,$this->z);
    }

    public function setXYZ($z){
        parent::setXY();
        $this->z =$z;
    }

    public function toString()
    {
        parent::toString();
        echo "<br>";
        echo "coordinates Z is ".$this->z;
    }
}