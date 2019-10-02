<?php
$array1 = array(
    "1" => "one",
    "2" => "two",
    "3" => "three",
    "4" => "four",
    "5" => "five",
    "6" => "six",
    "7" => "seven",
    "8" => "eight",
    "9" => "nine",
    "10" => "ten",
    "11" => "eleven",
    "12" => "twelve",
    "13" => "thirteen",
    "14" => "fourteen",
    "15" => "fifteen",
    "16" => "sixteen",
    "17" => "seventeen",
    "18" => "eighteen",
    "19" => "nineteen",
);
$array2 = array(
    "2" => "twenty",
    "3" => "thirty",
    "4" => "forty",
    "5" => "fifty",
    "6" => "sixty",
    "7" => "seventy",
    "8" => "eighty",
    "9" => "ninety",
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["check"];
    if ($num < 0) {
        echo "Không có số này ";
    } else if ($num > 0 && $num < 20) {
        foreach ($array1 as $key => $value) {
            if ($key == $num) {
                echo $value;
            }
        }
    } else if ($num > 19 && $num < 100) {
        $tenth = floor($num / 10);
        $unit = floor($num - $tenth * 10);
        foreach ($array2 as $keyTenth => $valueTenth) {
            if ($tenth == $keyTenth) {
                echo $valueTenth." ";
            }
        }
        foreach ($array1 as $keyUnit=> $valueUnit){
            if ($unit ==$keyUnit){
                echo $valueUnit;
            }
        }
    } else {
        echo "quá giới hạn";
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
    <input type="text" name="check" placeholder="Nhập số cần check">
    <input type="submit" name="submit" value="check">
</form>
</body>
</html>