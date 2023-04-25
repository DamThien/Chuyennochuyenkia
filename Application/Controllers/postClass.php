<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'\Chuyennochuyenkia\Application\Models\database.php'

?>


<?php

    class post {
        private $db;

        public function __construct(){

            $this -> db = new Database();
        }

        public function insert_post($post_name, $post_date, $post_descript, $post_input, $post_category){
            $query = "INSERT INTO articles (title_Article, date_posted, short_describe, content, id_category ) 
            VALUES ('$post_name', '$post_date', '$post_descript', '$post_input', '$post_category')";
            $result = $this->db->insert($query);
            return $result;
        }



        public function showCategory()
        {
            $query = "SELECT * FROM categories ORDER BY id_category ASC";
            $result = $this->db->select($query);
            return $result;
        }
   

        public function showPost(){
            $query = "SELECT articles.*, categories.name_category
            FROM articles INNER jOIN categories ON articles.id_category = categories.id_category
            ORDER BY articles.id_Article ASC"; 
            $result = $this->db->select($query);
            return $result;
        }

    public function delete_Article($Article_id)
    {
        $query = " DELETE FROM articles WHERE id_Article= '$Article_id'";
        $result = $this->db->delete($query);
        header('location: listPost.php');
        return $result;
    }

}


?>
