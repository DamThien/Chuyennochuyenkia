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
                <h3 class="heading">Đăng nhập</h3>
                <div class="form-group">
                    <label for="email_user" class="form-label">Email</label>
                    <input id="email_user" name="email_user" type="text" placeholder=" email" class="form-control">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="passwords" class="form-label">Mật khẩu</label>
                    <input id="passwords" name="passwords" type="password" placeholder="Nhập mật khẩu" class="form-control">
                    <span class="form-message"></span>
                </div>
                <button class="form-submit" name="sub">Đăng nhập</button>

            </form>
        </div>
       
       
        
       
    </body>
</html>
<?php
require 'connect.php';
if(isset($_POST['su'])){
    $email=$_POST['email_user'];
    $pass=$_POST['passwords'];

    $sql="SELECT *FROM accounts where passwords='$pass' and email_user='$email'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($query);
    if($email==$row['email_user'] && $pass==$row['passwords']){
        echo"<script> alert ('Đăng nhập thành công')</script>";
    }
    else{
        echo"<script> alert ('Đăng nhập thất bại')</script>";
    }
}

?>