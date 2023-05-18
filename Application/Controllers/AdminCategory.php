<?php
class AdminCategory extends Controller
{
    function Index()
    {
        $this->viewadmin("adminView", ["page" => "category"]);
    }
}
