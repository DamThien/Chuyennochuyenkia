<?php
class PostView extends Controller
{
    function Index()
    {
        $this->viewadmin("adminView",["page" => "post"]);
    }
}
