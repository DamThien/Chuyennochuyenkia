<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= ImageLink("logo.png") ?>">
    
    <title><?= $data['page'] ?></title>
</head>

<body>
    <!-- phàn header -->
    <header class="header">
        <div class="head-item">
            <div class="img-logo">
                <a href="<?= Redirect("Home") ?>"><img class="logotame" src="<?= ImageLink("logo.png") ?>" alt=""></a>
            </div>
            <div class="form">
                <input class="search" type="text" placeholder="Tìm Kiếm">

                <div class="list">
                    <a class="navig" href="<?= Redirect("Detail") ?>">Thời Sự</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Thế Giới </a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Kinh Tế</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Sức Khỏe</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Thể Thao</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com"> Giáo Dục</a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Công Nghệ </a>
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Giải Trí</a>
                </div>
            </div>
            <div>
                <button class="login"><a href="*">Đăng nhập</a></button>
            </div>
        </div>
    </header>
    <!-- phần content -->

    <?php
    require_once "./Application/Views/Pages/{$data['page']}.php";
    ?>
    <!-- phan Footer -->
    <section class="pass5">
        <div class="footer">
            <div class="footer-one">
                <a href="<?= Redirect("Home") ?>">
                    <img class="logo" src="<?= ImageLink("logo.png") ?>" alt="">
                </a>
                <p class="footer-information-img">Hân Hạnh Đồng Hành</p>
            </div>
            <div class="">
                <h1 class="footer-information"><a href="">Về chúng tôi</a></h1>
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

</html>

<?php

RenderCSS('header');
RenderCSS('footer');
RenderJs('slide');
RenderCSS('Main');
?>