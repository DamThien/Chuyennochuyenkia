<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Public/CSS/admin.css">
</head>

<body>
    <script src="../../../Framework/ckfinder/ckfinder.js"></script>
    <script src="../../../Framework/ckeditor/ckeditor.js"></script>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Views/Admin/headerAdmin.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Controllers/postClass.php';
   
    $post = new Post;

    if (!isset($_GET['id_Article']) || $_GET['id_Article'] == NULL) {
        echo "<script>window.location = 'EditPost.php'</script>";
    } else {
        $id_Article = $_GET['id_Article'];
    }

    $get_article = $post->get_post($id_Article);


    if ($get_article) {
        $result = $get_article->fetch_assoc();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $post_name = $_POST['post_name'];
        $post_date = $_POST['post_date'];
        $post_category = $_POST['post_category'];
        $post_descript = $_POST['post_descript'];
        $post_input = $_POST['post_input'];
        $id_category = $_POST['post_category'];
        // Check if a new image is selected
        if (!empty($_FILES['post_avatar']['tmp_name'])) {
            $post_avatar = $_FILES['post_avatar']['name'];
            $post_avatar_tmp = $_FILES['post_avatar']['tmp_name'];
            move_uploaded_file($post_avatar_tmp, "../../../Public/Images/" . $post_avatar);
        } else {
            $post_avatar = $result['post_avatar']; // Retain the old image if no new image is selected
        }
        $update_Post = $post->update_post(
            $post_name,
            $post_date,
            $post_descript,
            $post_input,
            $id_category,
            $post_avatar,
            $id_Article
        );
    }
    ?>
    <main role="main">
        <div class="admin_content-post">
            <h1>Sửa bài đăng</h1>
            <form method="POST" name="postForm" onsubmit="validateForm()" enctype="multipart/form-data">
                <label>Tiêu đề bài viết</label>
                <input type=" text" name="post_name" class="post_name" value="<?php echo $result['title_Article'] ?>" required>
                <label>Ngày đăng bài</label>
                <input type="date" name="post_date" value="<?php echo $result['date_posted'] ?>">
                <label>Chọn danh mục bài viết</label>
                <select name="post_category">
                    <option value="">--Chọn--</option>
                    <?php
                    $categories = $post->showCategory();
                    foreach ($categories as $item) {
                        $selected = ($result['id_category'] == $item['id_category']) ? 'selected' : '';
                        echo '<option value="' . $item['id_category'] . '" ' . $selected . '>' . $item['name_category'] . '</option>';
                    }
                    ?>
                </select>
                </select>
                <label>Mô tả ngắn</label>
                <textarea style="height:10%" name="post_descript" id="post_input1"><?php echo $result['short_describe'] ?></textarea>
                <label>Ảnh đại diện</label>
                <input type="file" name="post_avatar">
                <label>Nội dung bài viết</label>
                <textarea name="post_input" id="post_input"><?php echo $result['content'] ?></textarea>
                <button type="submit" name="btn_save">Update</button>
            </form>

        </div>
        <script>
            function validateForm() {
                var x = document.forms['postForm']['btn_save'].value;
                if (x == "") {
                    alert('Update bài viết thành công!!!!')
                }
            }
        </script>
        <script>
            CKEDITOR.replace('post_input', {
                filebrowserBrowseUrl: 'https://example.com/ckfinder/ckfinder.html',
                filebrowserUploadUrl: 'https://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
            });
            CKEDITOR.replace('post_input1');
        </script>
    </main>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Views/Admin/menuAdmin.php';
    ?>
</body>

</html>