<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Chuyennochuyenkia/Application/Views/Admin/headerAdmin.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/Chuyennochuyenkia/Application/Views/Admin/menuAdmin.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/Chuyennochuyenkia/Application/Controllers/postClass.php';

$list_post = new post;


$show_ListPost = $list_post->showPost();



?>
<main role="main">
    <div class="post_list">
      
        <table>
            <tr>
                <th>Tiêu đề</th>
                <th>Ngày đăng</th>
                <th>Người đăng</th>
                <th>Danh mục</th>
                <th>Lượt xem</th>
                <th>Trạng Thái</th>
                <th>Hành động</th>
            </tr>
                <?php

                foreach ($show_ListPost as $value) {
                    //cắt bớt tiêu đề
                    $title = (strlen($value['title_Article']) > 30) ? 
                    substr($value['title_Article'], 0, 30) . "..." : $value['title_Article'];
                    
                    echo '<tr>
                        <td>' . $title . '</td>
                        <td>' . $value['date_posted'] . '</td>
                        <td></td>
                        <td>'.$value['name_category'].'</td>
                        <td>' . $value['view'] . '</td>
                        <td></td>
                        <td><a href="#">sửa</a>|<a href="DeletePost.php?id_Article='.$value['id_Article'].'">Xóa</a></td>
                        </tr>';
                ?>

                <?php } ?>

        </table>
    </div>


</main>

