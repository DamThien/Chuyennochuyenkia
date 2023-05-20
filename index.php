<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '\Chuyennochuyenkia\Application\Controllers\postClass.php';

$list_post = new post;


$show_ListPost = $list_post->showPost();


require_once "./Application/Core/Function.php";
require_once "./Application/Bridge.php";
// RenderCSS('reset');
$myApp = new App();
