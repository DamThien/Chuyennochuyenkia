<?php

require_once 'D:\xampp\htdocs\Chuyennochuyenkia\Application\Models\database.php';
use Models\classDatabase\Database;

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
}


?>