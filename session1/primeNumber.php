<?php
function isPrimeNumber($n)
{
    if ($n < 2) {
        return false;
    } else {
        for ($i = 2; $i < sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
    }
    return true;
}

echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i<100;$i++){
    if (isPrimeNumber($i)){
        echo $i ." ";
    }
}