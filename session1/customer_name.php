<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid chartreuse;
    }
</style>
<body>
<table border="0">
    <caption><h1><span style="color: red">Danh Sách Khách Hàng</span></h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerList = array(
        "1" => array("ten" => "Lê Tấn Đạt",
            "ngaysinh" => "1998/10/27",
            "diachi" => "Hà Nội"),
        "2" => array("ten" => "Hồ Lý Phương",
            "ngaysinh" => "1998/10/08",
            "diachi" => "Hà Nội"),
        "3" => array("ten" => "Nguyễn Thị Thu Trang",
            "ngaysinh" => "1998/09/16",
            "diachi" => "Hà Nội"),
        "4" => array("ten" => "Nguyễn Thị Hiền",
            "ngaysinh" => "1998/02/14",
            "diachi" => "Hà Nội"),
        "5" => array("ten" => "Lê Quỳnh Trang",
            "ngaysinh" => "1998/10/22",
            "diachi" => "Hà Nội"),
    );
    foreach ($customerList as $key => $values) {
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>