<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Views\Admin\headerAdmin.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Views\Admin\menuAdmin.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Controllers\postClass.php';

$list_post = new post;


$show_ListPost = $list_post->showPost();



?>
<div role="main" style="margin-left: 25rem; margin-top:5rem">
    <div class="post_list">

        <table>
            <tr>
                <th>Tiêu đề</th>
                <th>Ảnh</th>
                <th>Người đăng</th>
                <th>Danh mục</th>
                <th>Lượt xem</th>
                <th>Trạng Thái</th>
                <th>Hành động</th>
            </tr>
            <?php
            if (is_array($show_ListPost) || is_object($show_ListPost)) {
                foreach ($show_ListPost as $value) {
                    //cắt bớt tiêu đề
                    $title = (strlen($value['title_Article']) > 30) ?
                        substr($value['title_Article'], 0, 30) . "..." : $value['title_Article'];

                    echo '<tr>
                                <td class="title-column">' . $title . '</td>
                                <td class="center-column"><img style="width: 200px;padding: 5px;" src="' . ImageLink($value['avatar'])  . '"></td>
                                <td class="center-column"></td>
                                <td class="center-column">' . $value['name_category'] . '</td>
                                <td class="center-column">' . $value['view'] . '</td>
                                <td class="center-column"></td>
                                <td class="center-column"><a href="EditPost.php?id_Article=' . $value['id_Article'] . '">sửa</a>|<a href="DeletePost.php?id_Article=' . $value['id_Article'] . '">Xóa</a></td>
                                </tr>';
                }
            } else {
                echo '<span style="color: red;">Invalid data. Please check your data.</span>';
            }

            ?>



        </table>
    </div>
            
    
</div>