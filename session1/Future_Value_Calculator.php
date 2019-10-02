<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $investmentAmount = $_POST["investmentAmount"];
    $yearlyInterestRate = $_POST["yearlyInterestRate"];
    $NumberYears = $_POST["NumberYears"];
    $futureValue = ($investmentAmount + ($investmentAmount * $yearlyInterestRate)) * $NumberYears;
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
    <input type="text" name="investmentAmount" placeholder="Lượng tiền đầu tư ban đầu">
    <input type="text" name="yearlyInterestRate" placeholder="Lãi suất năm">
    <input type="text" name="NumberYears" placeholder="Số năm đầu tư">
    <input type="submit" name="submit" value="calculate">
</form>

<?php echo "Ket qua la: " . $futureValue; ?>
</body>
</html>