<?php 
    class Admin extends Controller
    {
        function Index(){
            $this->viewadmin("adminView",["page"=>"listPost"]);                     
        }
    }
