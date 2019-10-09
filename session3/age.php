<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính tuổi của bạn</title>
</head>
<body>
<form method="post" >
    <table>
        <tr>
            <td>Nhập ngày sinh của bạn</td>
            <td><input type="text" name="input" placeholder="yyyy/mm/dd" style="text-align: center"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="tính"></td>
        </tr>
    </table>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        function calculateAge(){
            $birthDay = $_POST["input"];

            if (empty($birthDay)){
                return "Bạn đang để trống ô nhập vào";
            } else{
               $now = strtotime(date("Y/m/d"));
               $since = strtotime(date($birthDay));
               $yourAge = ceil(($now-$since)/31622400);

               return "Số tuổi của  bạn là: $yourAge";
            }
        }

        echo calculateAge();
    }

    ?>
</form>
</body>
</html>