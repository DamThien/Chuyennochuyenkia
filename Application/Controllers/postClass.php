<?php 
include 'D:\xampp\htdocs\Chuyennochuyenkia\Application\Models\database.php'

?>


<?php

use Models\classDatabase\Database;
    class post {
        private $sql;

        public function __construct(){

            $this -> sql = new Database();
        }
        public function insert_post($post_name, $post_date, $post_category, $post_descript, $post_input){
            $query = "INSERT INTO articles (title_Article, date_posted, id_category, short_describe,content ) 
            VALUES ('$post_name', $post_date, $post_category, $post_descript, $post_input)";
            $result = $this->sql->insert($query);
            return $result;

        }

    }





?>
