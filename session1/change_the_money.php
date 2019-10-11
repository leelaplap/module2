<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dollar = $_POST["nhap"];
    $vietnameseMoney = $dollar * 23000;
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
<form method="post">
    <label>Chuyển đổi tiền tệ</label>
    <input name="nhap" type="text">
    <input type="submit" value="calculate">

</form>

<?php echo $vietnameseMoney;
?>

</body>
</html>
