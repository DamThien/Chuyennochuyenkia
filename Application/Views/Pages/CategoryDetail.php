<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../../../Public/CSS/content.css">
</head>

<body>
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Controllers\categoryClass.php';

  $category = new Category();

  if (!isset($_GET['id_category']) || empty($_GET['id_category'])) {
    echo "<script>window.location = 'category.php'</script>";
  } else {
    $id_category = $_GET['id_category'];
  }

  $get_articles_result = $category->show_CategoryDetail($id_category);



  if ($get_articles_result) {
    $get_articles = mysqli_fetch_all($get_articles_result, MYSQLI_ASSOC);

    if (count($get_articles) > 0) {
      $category_name = $get_articles[0]['name_category'];
      echo "<h1>$category_name</h1>";
      echo "<hr>";
      echo "<div class='article-grid'>";
      foreach ($get_articles as $article) {
        echo "<div class='article'>";
        echo "<img src='../../../Public/Images/" . $article['avatar'] . "' alt='Ảnh bài viết'>";
        echo "<div class='article-content'>";
        echo "<h2>" . $article['title_Article'] . "</h2>";
        echo "<p>" . $article['short_describe'] . "</p>";
        echo "</div>";
        echo "</div>";
      }
      echo "</div>";
    } else {
      echo "Không có dữ liệu.";
    }
  } else {
    echo "Lỗi truy vấn SQL.";
  }
?>


  <hr>
</body>

</html>