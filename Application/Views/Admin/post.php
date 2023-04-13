<?php
include './headerAdmin.php';
require('../../Controllers/categoryClass.php');

?>



<main role="main">
    <div class="admin_content-post">
        <h1>Thêm bài đăng</h1>
        <form method="POST">
            <label>Tiêu đề bài viết</label>
            <input type="text" name="post_name">
            <label>Ngày đăng bài</label>
            <input type="date" name="post_date">
            <label>Chọn danh mục bài viết</label>
            <select name="post_category">
                <option value="">--Chọn--</option>
                <?php
                $category = new showCategory();

                $categories = $category->query_category();
                
                foreach ($categories as $item) {
                    echo '<option value="' . $item['category_id'] . '">' . $item['category_name'] . '</option>';
                }
                ?>
            </select>
            </select>
            <label>Mô tả ngắn</label>
            <textarea style="height:10%" name="post_descript"></textarea>
            <label>Nội dung bài viết</label>
            <textarea name="post_input"></textarea>
            <button type="submit" name="btn_save"> Save</button>
        </form>
    </div>
</main>
<?php include './menuAdmin.php' ?>