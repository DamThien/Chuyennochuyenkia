<?php
session_start();
include('../Models/chitietthegioi.model.php');
if (isset($_GET['newID'])) {
    $_SESSION['chinhtri'] = showchitiettchinhtri();
    // print_r($_SESSION['chinhtri']);
    header('location: http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/chitietthegioi.php');
}
if (isset($_GET['ID'])) {
    $id = (int)$_GET['ID'];
    echo $id ;
    // print_r($_SESSION['chinhtri']);
    foreach ($_SESSION['chinhtri'] as $key => $value) {
        if($key === $id) {

            $new_chinhtri = array(
                'img' =>  $value['img'],
                'title' =>  $value['title'],
                'content' =>  $value['content'],
                'id' =>  $value['id']
            );
            $_SESSION['Detailchinhtri'] = $new_chinhtri;
            // print_r($_SESSION['Detailchinhtri']);
            break;
        }
    }
    header('location: http://localhost/CHUYENNOCHUYENKIA/Chuyennochuyenkia/Application/Views/Pages/Layouts/thongtinchitietthegioi.php');

}
