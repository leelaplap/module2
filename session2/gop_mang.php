<?php
$firstArray = [1, 2, 3, 4, 5];
$secondArray = [0, 6, 7, 8, 9];

$thArray = array_merge($firstArray, $secondArray);

array_push($thArray, "time", 12, 13, 14, 15);
echo "<pre>";
print_r($thArray);
echo "</pre>";
