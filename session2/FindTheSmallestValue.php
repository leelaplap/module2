<?php
$numbers = [-155777, 2, 6, 29, 28, 3, -8, -888899999, 265];
$min = $numbers[0];
$index = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] < $min) {
        $min = $numbers[$i];
        $index = $i;
    }
}

echo "Min value is: " . $min . " " . "position is: " . $index;