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
    <?php
        require_once   $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Controllers/categoryClass.php';
        require_once   $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Views/Admin/headerAdmin.php';
        
        
        $category = new category;

        if (!isset($_GET['id_category']) || $_GET['id_category'] == NULL) {
            echo "<script>window.location = 'category.php'</script>";
        } else {
            $category_id = $_GET['id_category'];
        }

        $get_category = $category->get_category($category_id);
        if ($get_category) {
            $result = $get_category->fetch_assoc();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $category_name = $_POST['category_name'];
            $update_Category = $category->update_category($category_name, $category_id);
        }
    ?>

    
    <main role="main">
        <div class="admin_content-category">
            <h1>Sửa danh mục</h1>
            <form method="POST">
                <label>Nhập tên danh mục</label>
                <input type="text" name="category_name" value="<?php echo $result['name_category'] ?>" required>
                <button type="submit" name="btn_save">Update</button>
            </form>
        </div>
    </main>
    <?php require_once   $_SERVER['DOCUMENT_ROOT'] . '/Chuyennochuyenkia/Application/Views/Admin/menuAdmin.php'; ?>
</body>
</html>
