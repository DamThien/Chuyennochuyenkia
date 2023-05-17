<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Views/Admin/headerAdmin.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Controllers/postClass.php';

$post = new post;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_name = $_POST['post_name'];
    $post_date = $_POST['post_date'];
    $post_category = $_POST['post_category'];
    $post_descript = $_POST['post_descript'];
    $post_input = $_POST['post_input'];
    $post_avatar = $_FILES['post_avatar']['name'];
    move_uploaded_file($_FILES['post_avatar']['tmp_name'], "PostAvatar/" . $_FILES['post_avatar']['name']);
    
    $insert_port = $post->insert_post($post_name, $post_date, $post_descript, $post_input, $post_category, $post_avatar);
}

?>
<main role="main">
    <div class="admin_content-post">
        <h1>Thêm bài đăng</h1>
        <form method="POST" name="postForm" onsubmit="validateForm()" enctype="multipart/form-data">
            <label>Tiêu đề bài viết</label>
            <input type=" text" name="post_name" class="post_name" required>
            <label>Ngày đăng bài</label>
            <input type="date" name="post_date" class="post_date">
            <label>Chọn danh mục bài viết</label>
            <select name="post_category" class="post_category">
                <option value="">--Chọn--</option>
                <?php
                $categories = $post->showCategory();
                foreach ($categories as $item) {
                    echo '<option value="' . $item['id_category'] . '">' . $item['name_category'] . '</option>';
                }
                ?>
            </select>
            </select>
            <label>Mô tả ngắn</label>
            <textarea  name="post_descript" id="post_input1" class="post_descript"></textarea>
            <label>Ảnh đại diện</label>
            <input type="file" name="post_avatar" class="post_avatar">
            <label>Nội dung bài viết</label>
            <textarea name="post_input" id="post_input" class="post_input"></textarea>
            <button type="submit" name="btn_save">Save</button>
        </form>

    </div>

    <script>
        function validateForm() {
            var x = document.forms['postForm']['btn_save'].value;
            if (x == "") {
                alert('Thêm bài viết thành công!!!!')
            }
        }
    </script>

</main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Views/Admin/menuAdmin.php';
?>