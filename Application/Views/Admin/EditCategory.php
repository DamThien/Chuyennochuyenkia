<?php
    include './headerAdmin.php';
    include './menuAdmin.php';
    require('../../Controllers/categoryClass.php');

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
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $category_name =$_POST['category_name'];
    $update_Category = $category->update_category($category_name, $category_id);
}
?>


<main role="main">
    <div class="admin_content-category">
        <h1>Sửa danh mục</h1>
        <form method="POST">
            <label>Nhập tên danh mục</label>
            <input type="text" name="category_name" value="<?php
                                                            echo $result['name_category']
                                                            ?>" required>
            <button type="submit" name="btn_save">Save</button>
        </form>
    </div>
</main>