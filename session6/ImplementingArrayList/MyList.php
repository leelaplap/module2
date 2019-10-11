<?php


class MyList
{

    public $size;
    public $DEFAULT_CAPACITY;
    public $objectElements;

    public function __construct($object)
    {
        $this->size = 0;
        $this->DEFAULT_CAPACITY = 10;
        $this->objectElements = [];
    }

    public function getArrayList($arr = "")
    {
        if (is_array($arr) === true) {
            $this->objectElements = $arr;
        } else {
            $this->objectElements = [];
        }
    }

    public function add($index, $value)
    {
        array_pad($this->objectElements, $index, $value);
    }

    public function remove($index)
    {
        array_splice($this->objectElements, $index);
    }

    public function size()
    {
        count($this->objectElements);
    }

    public function booleanContains($value)
    {
        for ($i = 0; $i < count($this->objectElements); $i++) {
            if ($value === $this->objectElements[$i]) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function indexOf($value)
    {
        for ($i = 0; $i < count($this->objectElements); $i++) {
            if ($value === $this->objectElements[$i]) {
                return $i;
            } else {
                return -1;
            }
        }
    }

    public function get($index)
    {
        for ($i = 0; $i < $this->objectElements; $i++) {
            if ($index == $i) {
                return $this->objectElements[$i];
            } else {
                return "Error";
            }
        }
    }

    public function clear()
    {
        unset($this->objectElements);
    }
}