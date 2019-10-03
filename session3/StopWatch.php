<?php
class StopWatch {
    private $startTime;
    private $endTime;

    function __construct($startTime, $endTime)
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }

    function get_startTime(){
        return $this->startTime;
    }

    function get_endTime(){
        return $this->endTime;
    }

    function startTime(){
        $timeNow = date("Y-M-d h-m-s");
        echo "The time now is: " . $timeNow;
    }

    function start(){

    }
}
