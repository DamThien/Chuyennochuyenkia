<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?=
        RenderCSS("login")
    
    ?>
</head>

<body>

    <div class="main">
        <?php 
        if (isset($data['result'])) {
            if ($data['result']==true) {
                # code...
            }else {?>
                <h5>
                    <?php 
                     echo "Sai tài khoản hoặc mật khẩu"
                    ?>
                </h5>
            <?php }
        }?>
        <form action="Login/Login" method="POST" class="form" id="form-1">
            <h3 class="heading">Đăng nhập</h3>
            <div class="form-group">
                <label for="email_user" class="form-label">User name</label>
                <input id="email_user" name="username" type="text" placeholder="User name" class="form-control">
                <span class="form-message"></span>
            </div>
            <div class="form-group">
                <label for="passwords" class="form-label">Password</label>
                <input id="passwords" name="password" type="password" placeholder="Password" class="form-control">
                <span class="form-message"></span>
            </div>
            <button class="form-submit" name="submit">Login</button>

        </form>
    </div>




</body>

</html>