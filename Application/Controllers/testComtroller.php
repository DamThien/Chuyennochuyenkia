<?php 
require './categoryClass.php';

$category = new showCategory();


$result = $category->query_category();



// $category_name = "Danh mục B";
// $result = $category->insert_category($category_name);


// if ($result) {
//     echo "Chèn dữ liệu thành công!";
// } else {
//     echo "Chèn dữ liệu thất bại!";
// }
