<?php
include('../connect/connect.dp.php');
function showchitiettchinhtri(){
    global $conn;
    $sql = "SELECT * FROM chinhtri";
    $result = mysqli_query($conn, $sql);
    $rows = array(); // Khởi tạo một mảng để chứa các dòng kết quả.
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; // Thêm dòng kết quả vào mảng.
    }
    return $rows;
}
    
