<?php

define("ROOT_URL", "    ");
define("CART", "cart");
define("ADMIN_LOGIN", "adminLogin");
function Error()
{
    require_once "error.php";
}
function Redirect($controller, $action = "")
{
    $action = $action != "" ? "/$action" : "";
    return "/Chuyennochuyenkia/Application/Controllers/$controller" . "{$action}";
}
function RenderCSS($cssFileName)
{
echo "<link rel='stylesheet' href='" . ROOT_URL . "./Public/CSS/$cssFileName.css' type='text/css'>\n";
}
function RenderJs($jsFileName)
{
    echo "<script src='" . ROOT_URL . "./Public/JS/$jsFileName.js'></script>\n";
}
function ImageLink($imgFileName)
{
    return ROOT_URL . "./Public/Images/$imgFileName";
}