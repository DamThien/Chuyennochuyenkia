t<?php
    include './headerAdmin.php';
    include './menuAdmin.php';
    require('../../Controllers/categoryClass.php');

    $category = new category;

    $message = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $category_name = $_POST['category_name'];
        $insert_category = $category->insert_category($category_name);
      
    }

    $showCategory = $category->showCategory();

    ?>
<main role="main">
    <div class="admin_content-category">
        <h1>Danh mục</h1>
        <form method="POST" name="categoryform" onsubmit="validateform()">
            <label>Nhập tên danh mục</label>
            <input type="text" name="category_name" require>
            <button type="submit" name="btn_save"> Save</button>
        </form>
    </div>
    <div class="category_list">
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Trạng thái</th>
            </tr>

            <?php
            $Stt = 0;
            foreach ($showCategory as $item) {
                $Stt++;
                echo '<tr>
                    <td>' . $Stt . '</td>
                    <td>' . $item['id_category'] . '</td>
                    <td>' . $item['name_category'] . '</td>
                    <td><a href="EditCategory.php?id_category=' . $item['id_category'] . '">Sửa</a>|<a href="DeleteCategory.php?id_category=' . $item['id_category'] . '">xóa</a></td>
                    </tr>';
            ?>

            <?php } ?>
        </table>
        <script>
            function validateform() {
                var x = document.forms['categoryform']['btn_save'].value;
                    if(x==""){
                        alert('Thêm danh mục thành công!!!!')
                    }
            }
        </script>
    </div>


</main>