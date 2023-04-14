<?php 
include 'D:\xampp\htdocs\Chuyennochuyenkia\Application\Models\database.php'

?>


<?php

    class post {
        private $db;

        public function __construct(){

            $this -> db = new Database();
        }

        public function insert_post($post_name, $post_date, $post_descript, $post_input, $post_category){
            $query = "INSERT INTO articles (title_Article, date_posted, short_describe,content,id_category ) 
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

    public function get_category($id_category)
    {
        $query = "SELECT * FROM categories WHERE id_category= '$id_category'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_category($name_category, $id_category)
    {
        $query = " UPDATE categories SET name_category = '$name_category' WHERE id_category= '$id_category'";
        $result = $this->db->update($query);
        header('location: category.php');
        return $result;
    }

    public function delete_category($id_category)
    {
        $query = " DELETE FROM categories WHERE id_category= '$id_category'";
        $result = $this->db->delete($query);
        header('location: category.php');
        return $result;
    }
    }





?>
