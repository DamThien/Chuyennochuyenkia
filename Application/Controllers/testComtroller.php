<?php 
require './categoryClass.php';



$result = $category->queryCategory();
var_dump($result);


// $category_name = "Danh mục B";
// $result = $category->insert_category($category_name);


// if ($result) {
//     echo "Chèn dữ liệu thành công!";
// } else {
//     echo "Chèn dữ liệu thất bại!";
// }
