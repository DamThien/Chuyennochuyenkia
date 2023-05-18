<?php
session_start();
include('../Models/chitietthoitiet.model.php');
if (isset($_GET['newsID'])) { // sai 
    echo 'aaaaa';
    $_SESSION['thoitiet'] = showchitietthoitiet();
    // print_r($_SESSION['thoitiet']);
    header('location: http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/chitietthoitiet.php');
};
if (isset($_GET['ID'])) {
    $id = (int)$_GET['ID'];
    echo $id ;
    // print_r($_SESSION['chinhtri']);
    foreach ($_SESSION['thoitiet'] as $key => $value) {
        if($key === $id) {

            $new_thoitiet = array(
                'img' =>  $value['img'],
                'title' =>  $value['title'],
                'content' =>  $value['content'],
                'id' =>  $value['id']
            );
            $_SESSION['Detailthoitiet'] = $new_thoitiet;
            // print_r($_SESSION['Detailchinhtri']);
            break;
        }
    }
    // header('location: http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/thongtinchitietthoitiet.php');

}
