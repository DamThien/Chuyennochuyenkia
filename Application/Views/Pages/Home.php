<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyennochuyenkia</title>
</head>
<body>
<section>
        <div class="trevle">
            <div class="img-slider">
                <div class="img-item">
                    <div class="img-s1">
                        <img src="https://images2.thanhnien.vn/thumb_w/640/528068263637045248/2023/4/11/d58f55d4ab3e77602e2f-1681211001870620560780.jpg" alt="">

                        <a class="title-slider-s1">Khách đến ăn bánh xèo rồi bỏ lại bé gái 3 tuổi,vợ chồng bà Luôn giữ
                            lại nuôi và
                            <br> yêu thương như cháu nội. Hơn 4 năm qua, dù cuộc sống vất vả nhưng ông bà vẫn <br> nuôi
                            Tường Vy bằng tình thương vô bờ.
                        </a>
                    </div>

                    <!-- <h3>this is demo</h3> -->
                </div>

                <div class="img-item">
                    <div class="img-s2">

                        <img src="https://cdn.24h.com.vn/upload/2-2023/images/2023-04-12/Lukaku-sut-11m-giup-Inter-Milan-de-vao-ban-ket-Cup-C1-tiet-lo-dieu-bat-ngo-in-3-1681254711-722-width740height460.jpg" alt="">
                        <p class="title-slider-s2 "><a href="">Lukaku giúp Inter Milan dễ vào bán kết C1, tiết lộ bí quyết đáp trả
                                chỉ trích.</a>
                        </p>
                    </div>
                    <!-- <h3>this is demo</h3> -->
                </div>
                <div class="img-item">
                    <div class="img-s3">
                        <img src="https://file.vfo.vn/hinh/2016/08/hinh-anh-dep-ve-cao-nguyen-da-dong-van-9.jpg" alt="">
                        <p class="title">Mọi người đế với hạ long để có rải nghiệm tốt hất </p>
                    </div>
                    <!-- <h3>this is demo</h3> -->
                </div>
                <div class="img-item">
                    <div class="img-s4">
                        <img src="https://media.vov.vn/sites/default/files/styles/large/public/2020-09/99-thuyen_hoa.jpg" alt="">
                        <p class="title">Mọi người đế với hạ long để có rải nghiệm tốt hất </p>
                    </div>
                    <!-- <h3>this is demo</h3> -->
                </div>

            </div>
            <div class="backgroud">
                <div class="backgroud-left">
                    <img class="backgroud-left" src="https://www.anhdulich.vn/storage/sliders/ha-long-bay-copy.jpg" alt="">

                    <p class="title-slider-halong ">Hạ Long Đang Có Dấu Hiệu Đi Xuống

                    </p>

                </div>
                <!-- <div class="backgroud-left">
                    <img class="backgroud-left" src="http://www.vtr.org.vn/FileManager/Anh%20web%202022/Thang%204/0110/cuoc%20thi%20anh%20dep%20tay%20ninh22.jpg"  alt="">
                </div> -->
                <div class="backgroud-right">
                    <div class="backgroud-right-item">
                        <img class="backgroud-right-item" src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2017/8/28/551691/Du-Lich_1-01.jpg" alt="">

                        <p class="title-slider-chuavang ">Chùa Vang Giam Giasi Đột Ngột

                        </p>
                    </div>
                    <div class="backgroud-right-item">
                        <img class="backgroud-right-item" src="http://baoninhbinh.org.vn/DATA/ARTICLES/2021/9/28/day-manh-quang-ba-hinh-anh-du-lich-chuan-bi-tot-cac-dieu-4a7a8.jpg" alt="">


                        <p class="title-slider-ninhbinh ">Ninh Bình Đang Đông Lên Vì Du Lịch Tại Khá Đông

                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- phannoidung2 -->

    <section class="tree">
        <h1 class="acv">x</h1>
        <h2 class="tinnoibac">Tin nổi bật</h2>
    </section>

    <section class="pass4">
        <div class="row">
            <div class="col-sm-4 p-3 bg-primary text-white">
                
            </div>
            <div class="col-sm-8 p-3 bg-dark text-white"></div>
        </div>
        <div class="content">
            <div class="contentkinhte-right">

                <?php
                $mysqli = new mysqli("localhost", "root", "", "news_website");
                // Check connection
                if ($mysqli->connect_error) {
                    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                    exit();
                }
                
                $sql = "SELECT * FROM chuyendong24 limit 1;";
                $result = mysqli_query($mysqli, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                ?>

                    <div class="contentkinhte_steep1">
                        <div class="left-content">
                            <img src="<?php echo $row['img']?>" >
                        </div>
                        <div class="right-content">
                            <h2><?php echo $row['title']?></h2>
                            <a href="<?php echo $row['img']?>">
                            <?php echo $row['content']?> </a>
                        </div>
                    </div>
                <?php
                } ?>



                
            </div>
          
        </div>
        </div>

    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="../../../../Public/JS/slide.js"></script>
</html>



