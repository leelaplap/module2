<?php
for ($i=0; $i<5;$i++){
    for ($j = 0; $j <4; $j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($i=0; $i<5;$i++){
    for ($j=0;$j<$i;$j++){
        echo "-";
    }
    echo "<br>";
}
echo "<br>";

for ($i =7;$i>=1;$i-- ){
    for ($j=1; $j<=$i;$j++){
        echo "/";
    }
    echo "<br>";
}