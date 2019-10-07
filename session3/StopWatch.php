<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    function __construct()
    {
        $this->startTime;
        $this->endTime;
    }

    function get_startTime()
    {
        return $this->startTime;
    }

    function get_endTime()
    {
        return $this->endTime;
    }

    function startTime()
    {
        $this->startTime = microtime();
    }

    function stopTime()
    {
        $this->endTime = microtime();
    }

    function getElapsedTime()
    {
        echo $this->stopTime() - $this->startTime();
    }
}

$stopWatch = new StopWatch();
$number = [];
for ($i = 0; $i < 10000; $i++) {
    $number[$i] = rand(1, 10000);
}

$stopWatch->startTime();
sort($number);
$stopWatch->stopTime();
$stopWatch->getElapsedTime();