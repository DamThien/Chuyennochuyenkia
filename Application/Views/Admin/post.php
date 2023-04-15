<?php
include './headerAdmin.php';
include_once('../../Controllers/postClass.php');


$post = new post;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $post_name = $_POST['post_name'];
    $post_date = $_POST['post_date'];
    $post_category = $_POST['post_category'];
    $post_descript = $_POST['post_descript'];
    $post_input = $_POST['post_input'];

    $insert_port = $post -> insert_post($post_name, $post_date, $post_descript, $post_input, $post_category);


}

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
                $categories = $post -> showPost();
                foreach ($categories as $item) {
                    echo '<option value="' . $item['id_category'] . '">' . $item['name_category'] . '</option>';
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
<?php 
include './menuAdmin.php' ;

?>