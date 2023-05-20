<?php
class LoginModel extends Database
{
    public function login($username)
    {
        $sql = "SELECT * from accounts where name_user='{$username}'";
        return mysqli_query($this->link, $sql);
    }
}
