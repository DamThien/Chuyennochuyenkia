<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?= 
        RenderCSS("admin");
        RenderFramework("ckeditor/ckeditor");
        RenderFramework("ckfinder/ckfinder");
    ?>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Views\Admin\headerAdmin.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Views\Admin\menuAdmin.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Views\Admin\contentAdmin.php';
    ?>

</body>

</html>