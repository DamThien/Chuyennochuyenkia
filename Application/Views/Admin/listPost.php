t<?php
    include './headerAdmin.php';
    include './menuAdmin.php';
    include_once('../../Controllers/postClass.php');

    $list_post = new post;


    $show_ListPost = $list_post->showPost();

    ?>
<main role="main">
    <div class="post_list">
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Ngày đăng</th>
                <th>Mô tả ngắn</th>
                <th>Nội dụng</th>
                <th>Danh mục</th>
                <th>Trạng Thái</th>
                <th>Lượt xem</th>
            </tr>
            <?php
            $Stt = 0;
            foreach ($show_ListPost as $item) {
                $Stt++;
                echo '<tr>
                    <td>' . $Stt . '</td>
                    <td>' . $item['id_Article'] . '</td>
                    <td>' . $item['title_Article'] . '</td>
                    <td>' .$item['date_posted']. '</td>
                    <td>' . $item['short_describe'] . '</td>
                    <td>'.$item['content']. '</td>
                     <td>' . $item['date_posted'] . '</td>
                    </tr>';
            ?>

            <?php } ?>

        </table>
    </div>


</main>