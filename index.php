<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .box1 {
        width: 200px;
        height: 200px;
        background: red;
        color: yellow;
    }
    </style>
</head>
<body>
    <h1>Trang chủ</h1>
    <?php

    // $hoten;
    // $111hoten;
    // $cuong;
    // $HoTen;     // Pascal
    // $ho_ten;    // Kebab        
    // $hoTen;     // Carmel

    $hoten = 'AAABBCCC';
    $password = '123456';


    echo '<h1 style="color: blue;">Xin chào PHP</h1>';

    echo 'Bạn tên là: <span style="color: red; font-size: 20px;">' . $hoten . '</span>';

    echo "Bạn tên là: <span style=\"color: red; font-size: 20px;\" $hoten </span>";

    echo 'Mật khẩu bạn là: ' . $password;
    echo "Mật khẩu bạn là: $password";

    ?>

    <div class="box1">
        Xin chào bạn <?php echo $hoten; ?> !!!
        Xin chào bạn dong 2 <?= $hoten; ?> !!!
    </div>

    <a href="pages/about.php">Giới thiệu</a><br />
    <a href="pages/contact.php">Liên hệ</a><br />
</body>
</html>

