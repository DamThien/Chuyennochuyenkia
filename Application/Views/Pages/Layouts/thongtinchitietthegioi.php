<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../../Public/Images/Logo/logo.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- <link rel="stylesheet" href="../../../../Public/CSS/reset.css"> -->
    <link rel="stylesheet" href="../../../../Public/CSS/header.css">
    <link rel="stylesheet" href="../../../../Public/CSS/footer.css">

    <link rel="stylesheet" href="../../../../Public/CSS/content.css">
    <link rel="stylesheet" href="../../../../Public/CSS/contentnoibat.css">
    <link rel="stylesheet" href="../../../../Public/CSS/chitietkinhte.css">

    <title>Chuyen No Chuyen kia</title>
</head>



<body>
    <!-- phàn header -->
    <section class="header">
        <div class="head-item">
            <div class="img-logo">
                <img class="logotame" src="../../../../Public/Images/Logo/logo.png" alt="">
            </div>
            <div class="form">
                <input class="search" type="text" value="Tìm Kiếm">

                <div class="list">

                    <a class="navig" href="http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/chitietthoitiet.php?newsID=1">Thời Tiết</a>
                    <a class="navig" href="http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/chitietthegioi.php?newsID=2">Thế Giới </a>
                    <a class="navig" href="http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/chitietkinhte.php?newsID=3">Kinh Tế</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Sức Khỏe</a>
                    <a class="navig" href="http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/chitietthethao.php?newsID=4">Thể Thao</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com"> Giáo Dục</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Công Nghệ </a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Giải Trí</a>
                </div>
            </div>
            <div>
                <input class="login" type="text" value="Đăng Nhập">
            </div>
        </div>
    </section>
    <!-- phần content -->

    <?php
    // require "../../Pages/Home.php";
    ?>
    <?php
    if (isset($_SESSION['Detailchinhtri'])) {
        // print_r($_SESSION['Detailchinhtri']);
        $row = $_SESSION['Detailchinhtri'];
    ?>
        <div class="thongtinchitietthegioi">
            <div class="title-thongtinchitietthegioi">
                <?php echo $row['title']; ?>
            </div>
            <div class="img-thongtinchitietthegioi">
                <img src="<?php echo $row['img']; ?>" alt="">
            </div>
            <div class="content-thongtinchitietthegioi">
                <?php echo $row['content']; ?>
            </div>
           
        </div>
    <?php
    }
    ?>
    





    <!-- phan Footer -->
    <section class="pass5">
        <div class="footer">
            <div class="footer-one">
                <img class="logo" src="../../../../Public/Images/Logo/logo.png" alt="">
                <p class="footer-information-img">Hân Hạnh Đồng Hành</p>
            </div>
            <div class="">
                <h1 class="footer-information">Về chúng tôi</h1>
                <p class="footer-informations">0899231687</p>
                <p class="footer-informations">Lexuan2201@gmail.com</p>
                <p class="footer-informations">Chuyennochuyenkia@gmial.com</p>

            </div>
            <div>
                <h1 class="footer-information">Lợi ích</h1>
                <p class="footer-informations">Gải xầu</p>
                <p class="footer-informations">Uư đãi cao</p>
                <p class="footer-informations">Hướng dẫn sử dụng</p>
                <p class="footer-informations">Nhiều tin tức mới lạ</p>


            </div>
            <div>
                <h1 class="footer-information">Hỗ trợ mọi người</h1>
                <p class="footer-informations">Chính trị </p>
                <p class="footer-informations">Thế giới</p>
                <p class="footer-informations">Toàn cầu</p>
                <p class="footer-informations">Tin tức hót nhất</p>
                <p class="footer-informations">Tin tức mới nhất trong ngày</p>

            </div>


        </div>
        <p class="footer-information-cuoi">2022-2023 Bản quyền thuộc về Tám 24h
            Cấm sao chép dưới mọi hình thức nếu không có sự chấp thuận bằng văn bản</p>


    </section>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="../../../../Public/JS/slide.js"></script>

</html>