<?php
error_reporting(0);

require 'connect.php';

if(isset($_POST['sub'])){
    $name = $_POST['name_user'];
    $pass = $_POST['passwords'];
    $email = $_POST['email_user'];

    $sql = "INSERT INTO accounts (name_user, passwords, email_user) VALUES ('$name', '$pass', '$email')";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script>alert('Đăng ký thành công');</script>";
    }
    else{
        echo "<script>alert('Đăng ký thất bại');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Public/CSS/DangKy.css">
</head>
<body>
    <div class="main">
        <form action="" method="POST" class="form" id="form-1">
            <h3 class="heading">Đăng ký</h3>
            <div class="spacer"></div>

            <div class="form-group">
                <label for="name_user" class="form-label">Tên đầy đủ</label>
                <input id="name_user" name="name_user" type="text" placeholder="Họ và tên" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="email_user" class="form-label">Email</label>
                <input id="email_user" name="email_user" type="text" placeholder="Email" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="passwords" class="form-label">Mật khẩu</label>
                <input id="passwords" name="passwords" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>
            <button class="form-submit" name="sub">Đăng ký</button>
        </form>
    </div>
</body>
</html>
