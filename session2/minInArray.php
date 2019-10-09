<?php
$firstArray = [-5521, 3, 8, 654654, -88, 88, 364];
$min = $firstArray[0];
$index = 0;

for ($i = 1; $i < count($firstArray); $i++) {
    if ($firstArray[$i] < $min) {
        $min = $firstArray[$i];
        $index = $i;
    }
}

echo "Min value is: " . $min . " and position is: " . $index;