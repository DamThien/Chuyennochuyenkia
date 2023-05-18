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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Chuyen No Chuyen kia</title>


    <!-- <?php
            $news_id = $_GET['newsID'];
            ?> -->
</head>

<style>
 
  </style>

<body>
    <p><?php echo $news_id; ?></p>

    <!-- phàn header -->
    <section class="header">
        <div class="head-item">
            <div class="img-logo">
                <img class="logotame" src="../../../../Public/Images/Logo/logo.png" alt="">
            </div>
            <div class="form">
                <input class="search" type="text" value="Tìm Kiếm">

                <div class="list">
                    <a class="navig" href="http://chuyennochuyenkia.atwebpages.com">Thời Sự</a>
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
                <input class="login" type="text" value="Đăng Nhập">
            </div>
        </div>
    </section>

    <!-- ----content -->

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="custom-element">
                        <?php
                        // $mysqli = new mysqli("localhost", "root", "", "news_website");
                        // // Check connection
                        // if ($mysqli->connect_error) {
                        //     echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                        //     exit();
                        // }

                        // $sql = "SELECT * FROM chinhtri;";
                        // $result = mysqli_query($mysqli, $sql);

                        // while ($row = mysqli_fetch_assoc($result)) {

                        // include('../Layouts/Mainlayout.php');
                        // include('../chuyennochuyenkia/Chuyennochuyenkia/Application/Models/chitietthegioi.model.php');

                        if (isset($_SESSION['chinhtri'])) {
                            foreach ($_SESSION['chinhtri'] as $key => $row) {
                        ?>

                                <div class="contentkinhte_steep1">
                                    <div class="left-content">
                                        <img src="<?php echo $row['img'] ?>">
                                    </div>
                                    <div class="right-content">
                                        <h2><?php echo $row['title'] ?></h2>
                                        <a href="http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Controllers/chitietchinhtri.controller.php?ID=<?php echo $key ?>">
                                            <?php echo $row['content'] ?> </a>
                                    </div>
                                </div>
                        <?php     }
                        } ?>

                    </div>
                </div>





            </div>
            <div class="contentkinhte-left">
                <div class="box-category box_giavang box_giavang_300">

                    <table border="1" cellpadding="0" cellspacing="0" width="100%">
                        <p class="title_box"><span class="title_left">Giá vàng</span>
                            <span class="title_right">Xem toàn bộ</span>
                        </p>

                        <tr>
                            <td></td>
                            <td>Mua</td>
                            <td>Bán</td>
                        </tr>
                        <tr>
                            <td>Vàng SJC (triệu đồng/lượng)</td>
                            <td>66,6</td>
                            <td>67,2</td>
                        </tr>
                        <tr>
                            <td>Vàng thế giới (USD/ounce)</td>
                            <td>2.014</td>
                            <td>2.014,5</td>
                        </tr>

                    </table>
                </div>
                <div class="box-category box_giavang box_laisuat_300">
                    <p class="title_box"><span class="title_left">Lãi suất tiền gửi (%năm)</span></p>
                    <div class="wrap_ty_gia">
                        <table border="1" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td>Kỳ hạn (tháng)</td>
                                    <td>Online</td>
                                    <td>Tại quầy</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>3,95</td>
                                    <td>3,75</td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>5,70</td>
                                    <td>5,50</td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>5,90</td>
                                    <td>5,70</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>6,20</td>
                                    <td>6,00</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>6,40</td>
                                    <td>6,20</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>6,55</td>
                                    <td>6,35</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>6,60</td>
                                    <td>6,40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>

    </section>


    <!-- phần footer -->
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</html>