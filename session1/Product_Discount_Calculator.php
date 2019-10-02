<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productDescription = $_POST["productDescription"];
    $listPrice = $_POST["listPrice"];
    $discountPercent = $_POST["discountPercent"];
    $discountAmount = ($listPrice * $discountPercent * 0.1);
    $discountPrice = $productDescription * ($productDescription - $discountAmount);
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
    <input type="text" name="productDescription" placeholder="Mô tả của sản phẩm">
    <input type="text" name="listPrice" placeholder="Giá niêm yết của sản phẩm">
    <input type="text" name="discountPercent" placeholder="Tỷ lệ chiết khấu (phần trăm)">
    <input type="submit" name="submit" value="calculate">
</form>
<?php
echo "Product Description: " . $productDescription . "<br>";
echo "Price: $" . $listPrice . "<br>";
echo "Discount Percent: " . $discountPercent . "%" . "<br>";
echo "Discount Amount: $" . $discountAmount . "<br>";
echo "Discount Price: $" . $discountPrice . "<br>";
?>
</body>
</html>