 
<!DOCTYPE html>
<html>
<head>
    <title>Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <?php
        // Kết nối cơ sở dữ liệu
        $conn = mysqli_connect('localhost:3307', 'root', '', 'news_website');
 
        // Kiểm tra kết nối
        if (!$conn) {
            die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
        }

        // Kiểm tra xem có tham số 'id' được truyền qua URL không
        if (isset($_GET['ID'])) {
            // Lấy giá trị ID từ tham số truy vấn
            $id = $_GET['ID'];
           
            // Truy vấn bảng "articles" để lấy dữ liệu
            $query = "SELECT * FROM articles WHERE id_Article = $id";
            $result = mysqli_query($conn, $query);
            

            // Kiểm tra kết quả truy vấn
          
        }
    ?>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        // Lấy dữ liệu của bài viết từ kết quả truy vấn
                        $article = mysqli_fetch_assoc($result);
        
                        // Hiển thị dữ liệu trong trang "detail.php"
                        echo "<h1>".$article['title_Article']."</h1>";
                        echo "<p>".$article['content']."</p>";
                        // ...
                    } else {
                        echo "Không tìm thấy bài viết.";
                    }
        
                    // Giải phóng kết quả truy vấn và đóng kết nối
                    mysqli_free_result($result);
                    mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
 


