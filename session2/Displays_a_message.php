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
            try {
                if ($secondNumber == 0) {
                    throw new Exception("số thứ 2 không được là số 0");
                } else {
                    $result = $firstNumber / $secondNumber;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
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
<body style="text-align: center">
<h1 style="color: #CC4C54">CALCULATOR</h1>
<form method="post">
    <label>Số thứ 1 là: </label>
    <input type="text" name="firstNumber" placeholder="Nhập số thứ 1" style="text-align: center"><br>
    <label>Số thứ 2 là: </label>
    <input type="text" name="secondNumber" placeholder="Nhập số thứ 2" style="text-align: center"><br><br>
    <select name="calculator">
        <option value="cong">addition</option>
        <option value="tru">subtraction</option>
        <option value="nhan">multiplication</option>
        <option value="chia">division</option>
    </select>
    <br><br>
    <input type="submit" value="calculate"><br>
    <?php echo "Kết quả là: " . $result; ?>
</form>
</body>
</html>
