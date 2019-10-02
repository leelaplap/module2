<?php
$myArray = array(
    [1,2,3,4,5,6],
    [7,8,9,10,11,12]
);
$max = $myArray[0][0];
for ($i = 0; $i < count($myArray); $i++) {
    for ($j = 0; $j < count($myArray[$i]); $j++) {
        if ($max < $myArray[$i][$j]) {
            $max = $myArray[$i][$j];
        }
    }
}
echo $max;
