

<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Controllers\postClass.php';

$list_post = new post;


$show_ListPost = $list_post->showPost();
$limitedListPost = mysqli_fetch_all($show_ListPost, MYSQLI_ASSOC);

?>

<section class="tree">
    <h1 class="acv">x</h1>
    <h2 class="tinnoibac">Tin nổi bật</h2>
</section>

<section class="pass4">
    <div class="information-pass4-left">
        <?php
        // Đảm bảo đối tượng $show_ListPost không trống
        if (mysqli_num_rows($show_ListPost) > 0) {
            // Đảm bảo mảng $limitedListPost có ít nhất 5 phần tử
            if (count($limitedListPost) >= 4) {
                // Chọn ngẫu nhiên 5 phần tử từ mảng
                $randomIndexes = array_rand($limitedListPost, 4);

                foreach ($randomIndexes as $index) {
                    $post = $limitedListPost[$index];
                    $image = ImageLink($post['avatar']);
                    $titles = $post['title_Article'];
                    $id = $post['id_Article'];
                   
                
                    
        ?>
                    <a href="<?= Redirect("Detail"); ?>&ID=<?=$id?>">
                        <div class="information-pass4-content">
                            
                            <img class="information-pass4-left-item" src="<?= $image ?>" alt="">
                                <h3><?= $titles ?></h3>
                            </div>
                    </a>
        <?php
                }
            }
        }
        ?>
    </div>

</section>