<?php
    require_once $_SERVER['DOCUMENT_ROOT']. '\Chuyennochuyenkia\Application\Controllers\postClass.php';

    $Article = new post;
    if (!isset($_GET['id_Article']) || $_GET['id_Article'] == NULL) {
        echo "<script>window.location = 'listPost.php'</script>";
    } else {
        $Article_id = $_GET['id_Article'];
    }

    // $delete_Category = 
    $Article -> delete_Article($Article_id);
