<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["input"];

    function firstPrimeNumber($value)
    {
        if ($value < 2) {
            return false;
        } else {
            for ($i = 2; $i < sqrt($value); $i++) {
                if ($value % $i == 0) {
                    return false;
                }
            }
        }
        return true;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Khai báo biến số nguyên numbers
    <input type="text" name="input">
    <input type="submit" value="calculate">
</form>
<?php

echo "Các số nguyên tố nhỏ hơn ".$number." la"."<br>";
for ($i = 0; $i < $number; $i++) {
    if (firstPrimeNumber($i)) {
        echo $i . " ";
    }
}
?>
</body>
</html>
