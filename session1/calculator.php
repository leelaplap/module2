<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secondNumber"];
    switch ($_POST["calculator"]) {
        case "cong":
            $result = $firstNumber + $secondNumber;
            break;
        case "tru":
            $result = $firstNumber - $secondNumber;
            break;
        case "nhan":
            $result = $firstNumber * $secondNumber;
            break;
        case "chia":
            if ($secondNumber != 0){
                $result = $firstNumber / $secondNumber;
                break;
            }else{
                $result = "errol";
            }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalafirstNumberble=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <label>Số thứ nhất : <input type="text" name="firstNumber"></label><br><br>
    <label>Số thứ hai : <input type="text" name="secondNumber"></label><br><br>

    <select name="calculator">
        <option value="cong">+</option>
        <option value="tru">-</option>
        <option value="nhan">*</option>
        <option value="chia">/</option>
    </select>
    <input type="submit" value="calculate">
<!--    <input type="submit" value="cong" name="calculator">-->
<!--    <input type="submit" value="tru" name="calculator">-->
<!--    <input type="submit" value="nhan" name="calculator">-->
<!--    <input type="submit" value="chia" name="calculator">-->
    <?php echo "kết quả la: " .$result ?>
</form>
</body>
</html>