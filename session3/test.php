<?php

$date = getdate();

echo "Thứ: ".$date['weekday']."<hr>";
echo "Ngày: ".$date['day']."<hr>";
echo "Tháng: ".$date['mon']."<hr>";
echo "Năm: ".$date['year']."<hr>";
echo "Giờ: ".$date['hours']."<hr>";
echo "Phút: ".$date['minutes']."<hr>";
echo "Giây: ".$date['seconds']."<hr>";

?>

<?php

$date = getdate(104458600);

echo "Thứ: ".$date['weekday']."<hr>";
echo "Ngày: ".$date['day']."<hr>";
echo "Tháng: ".$date['mon']."<hr>";
echo "Năm: ".$date['year']."<hr>";
echo "Giờ: ".$date['hours']."<hr>";
echo "Phút: ".$date['minutes']."<hr>";
echo "Giây: ".$date['seconds']."<hr>";

?>

