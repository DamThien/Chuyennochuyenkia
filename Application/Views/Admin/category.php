t<?php
include './headerAdmin.php';
include './menuAdmin.php';
require('../../Controllers/categoryClass.php');

$category = new category;

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_name = $_POST['category_name'];
    $insert_category = $category->insert_category($category_name);
    if ($insert_category) {
        $message = "<p class='success_message'>Chèn danh mục thành công!!!</p>";
    } else {
        $message = "<p class='error_message'>Lỗi khi chèn danh mục!</p>";
    }
}

$showCategory = $category ->showCategory();

?>
<main role="main">
    <div class="admin_content-category">
        <h1>Danh mục</h1>
        <form method="POST">
            <label>Nhập tên danh mục</label>
            <input type="text" name="category_name" required>
            <button type="submit" name="btn_save"> Save</button>
            <?php echo $message ?>
        </form>
    </div>
    <div class="category_list">
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Ghi chú</th>
            </tr>
           
           <?php
            $Stt=0;
            foreach ($showCategory as $item) {
                $Stt++;
                echo'<tr>
                    <td>'.$Stt.'</td>
                    <td>'.$item['id_category'].'</td>
                    <td>'.$item['name_category'].'</td>
                    <td><a href="#">Sửa</a>|<a href="#">xóa</a></td>
                    </tr>';
            ?>

            <?php }?>
        </table>
    </div>


</main>
