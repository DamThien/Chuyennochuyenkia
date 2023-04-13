<?php
    require('../../Controllers/categoryClass.php');

    $Category = new category;
    if (!isset($_GET['id_category']) || $_GET['id_category'] == NULL) {
        echo "<script>window.location = 'category.php'</script>";
    } else {
        $category_id = $_GET['id_category'];
    }

    $delete_Category = $Category -> delete_category($category_id);
?>
