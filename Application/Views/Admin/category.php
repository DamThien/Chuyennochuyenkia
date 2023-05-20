<?php
    // require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Views\Admin\headerAdmin.php';
    // require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Views\Admin\menuAdmin.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Controllers\categoryClass.php';

    $category = new category;

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
            <input type="text" name="category_name" required>
            <button type="submit" name="btn_save"> Save</button>
        </form>
    </div>
    <div class="category_list">
        <table>
            <tr>
                <th>Stt</th>
                <th>Tên danh mục</th>
                <th>Trạng thái</th>
            </tr>

            <?php
            $Stt = 0;
            if (is_array($showCategory) || is_object($showCategory)) {
                foreach ($showCategory as $item) {
                    $Stt++;
                    echo '<tr>
                        <td>' . $Stt . '</td>
                        <td>' . $item['name_category'] . '</td>
                        <td><a href="./Application/Views/Admin/EditCategory.php?id_category=' . $item['id_category'] . '">Sửa</a>|<a href="./Application/Views/Admin/DeleteCategory.php?id_category=' . $item['id_category'] . '">xóa</a></td>
                        </tr>';
                }
            } else {
                echo '<span style="color: red;">Invalid data. Please check your data.</span>';
            }
            ?>
        </table>
    </div>
    <script>
        function validateform() {
            var x = document.forms['categoryform']['btn_save'].value;
            if (x == "") {
                alert('Thêm danh mục thành công!!!!')
            }
        }
    </script>


</main>