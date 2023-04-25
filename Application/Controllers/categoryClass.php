<?php

// require_once $_SERVER['DOCUMENT_ROOT'].'D:\xampp\htdocs\Chuyennochuyenkia\Application\Models\database.php';
require_once $_SERVER['DOCUMENT_ROOT']."/Chuyennochuyenkia/Application/Models/database.php";
class category
{
    private $db;

    public function __construct()
    {

        $this-> db = new Database() ;
    }
    public function insert_category($category_name)
    {
        $query = "INSERT INTO categories (name_category) VALUES ('$category_name')";
        $result = $this ->db->insert($query);
        return $result;
    }


    public function showCategory(){
            $query = "SELECT * FROM categories ORDER BY id_category ASC";
            $result = $this -> db ->select($query);
            return $result;

    }

    public function get_category($id_category){
        $query = "SELECT * FROM categories WHERE id_category= '$id_category'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_category($name_category,$id_category){
        $query = " UPDATE categories SET name_category = '$name_category' WHERE id_category= '$id_category'";
        $result = $this->db->update($query);
        header('location: category.php');
        return $result;

       
    }

    public function delete_category($id_category){
        $query = " DELETE FROM categories WHERE id_category= '$id_category'";
        $result = $this->db->delete($query);
        header('location: category.php');
        return $result;
    }
}


?>