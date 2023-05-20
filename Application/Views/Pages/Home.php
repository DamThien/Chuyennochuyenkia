<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Controllers\postClass.php';

$list_post = new post;


$show_ListPost = $list_post->showPost();

?>

<div class="content">
    <!-- <link rel="stylesheet" href="http://localhost/Chuyennochuyenkia/Public/CSS/content.css"> -->
    <?=
    RenderCSS('content');
    RenderCSS('contentnoibat');

    ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <section>

        <div class="trevle">
            <div class="img-slider">
                <?php
                $count = 0;
                $limitedListPost = mysqli_fetch_all($show_ListPost, MYSQLI_ASSOC); // Chuyển đổi đối tượng thành mảng

                $limitedListPostImg = array_slice($limitedListPost, 0, 4); // Lấy 4 phần tử đầu tiên cho phần img-slider

                foreach ($limitedListPostImg as $post) {
                    $image = ImageLink($post['avatar']);
                    $title = $post['title_Article'];


                ?>

                    <div class="img-item">
                        <div class="img-s<?= $count + 1 ?>">
                            <img src="<?= $image ?>" alt="">
                            <h1 class="title-slider-s<?= $count + 1 ?>"><?= $title ?></h1>
                        </div>
                    </div>

                <?php
                    $count++;
                }
                ?>
            </div>

            <div class="backgroud">
                <div class="backgroud-left">
                    <?php if (!empty($limitedListPostImg) && isset($limitedListPostImg[3])) :
                        $firstPost = $limitedListPostImg[3];
                        $firstImage = ImageLink($firstPost['avatar']);
                        $firstTitle = $firstPost['title_Article'];
                    ?>

                        <img class="backgroud-left" src="<?= $firstImage ?>" alt="">
                        <!-- <h2 class="title-slider"><?= $firstTitle ?></h2> -->
                    <?php endif; ?>
                </div>

                <div class="backgroud-right">
                    <?php
                    $limitedListPostBg = array_slice($limitedListPost, 5, 2); // Lấy 2 phần tử tiếp theo cho phần backgroud

                    foreach ($limitedListPostBg as $post) {
                        $image = ImageLink($post['avatar']);
                        // $title = $post['title_Article'];
                    ?>

                        <div class="backgroud-right-item">
                            <img class="backgroud-right-item" src="<?= $image ?>" alt="">
                            <!-- <p class="title-slider"><?= $title ?></p> -->
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>


</div>


</section>



<!-- phannoidung2 -->
<?php require_once "Hotnews.php"?>
</div>