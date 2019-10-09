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
        $this->startTime = round(microtime(true) * 1000);
    }

    function stopTime()
    {
        $this->endTime = round(microtime(true) * 1000);
    }

    function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}

$stopWatch = new StopWatch();
$number = [];
for ($i = 0; $i < 100000; $i++) {
    $number[$i] = rand(1, 100000);
}

$stopWatch->startTime();
echo $stopWatch->get_startTime();
echo "<br>";
sort($number);
$stopWatch->stopTime();
echo $stopWatch->get_endTime();
echo "<br>";
echo $stopWatch->getElapsedTime();