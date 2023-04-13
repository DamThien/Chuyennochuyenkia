<?php

require_once 'D:\xampp\htdocs\Chuyennochuyenkia\Application\Models\database.php';


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
}


class showCategory 
{   
    private $dbcategory;

    public function __construct(){
        $this->dbcategory = new Database();
    }

    public function query_category()
    {
        $sql = "SELECT * FROM categories";
        $result = $this->dbcategory->select($sql);
        return $result;
    }
}

?>