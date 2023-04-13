<?php 
    include "../Models/database.php";
?>


<?php
    class post {
        private $db;

        public function __construct(){

            $this -> db = new Database();
        }
        public function insert_post($post_name, $post_date, $post_category, $post_descript, $post_input){
            $query = "INSERT INTO articles (title_Article, content, date_posted, ) VALUES ('$post_name')";
            $result = $this->db->insert($query);
            return $result;

        }

    }





?>
