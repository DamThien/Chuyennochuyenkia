<?php
class LoginModel extends DbB
{
    public function login($username)
    {
        $sql = "SELECT * from accounts where name_user='{$username}'";
        return mysqli_query($this->con, $sql);
    }
}
