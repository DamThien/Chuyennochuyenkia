<?php
include './headerAdmin.php';
include './menuAdmin.php';
require('../../Controllers/categoryClass.php');

$category = new category();
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

?>
<main role="main">
    <div class="admin_content-category">
        <h1>Thêm danh mục</h1>
        <form method="POST">
            <label>Nhập tên danh mục</label>
            <input type="text" name="category_name" required>
            <button type="submit" name="btn_save"> Save</button>
            <?php echo $message ?>
        </form>
    </div>
</main>
>