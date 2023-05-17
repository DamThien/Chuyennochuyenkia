<?php 
    class Home extends Controller
    {
        function Index(){
            $this->view("Mainlayout", ["page" => "Home"]);                     
        }
    }
    
?>