<?php 
class Login extends Controller
{
   public $Loginmodel;
    function __construct()
    {
        $this->Loginmodel = $this->model("LoginModel");
    }
    public function Index()
    {
        $this->viewadmin("login", [

        ]);
    }
    public function Login()
    {
        $result_mess = false;
        if (isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password_input = $_POST["password"];
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                $this->viewadmin("login", ["result" => $result_mess]);
            }
            $result = $this->Loginmodel->Login($username);
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id_user"];
                    $username = $row["name_user"];
                    $password = $row["Passwords"];
                }
                if (password_verify($password_input, $password)) {
                    $_SESSION["id"] = $id;
                    $this->viewadmin("Login", ["result" => $result_mess]);
                }else {
                    $this->viewadmin("adminView", ["page" => "listPost", ["result" => $result_mess = true]]);
                }
            }
        }
    }
    public function Logout()
    {
        unset($_SESSION["id"]);
        session_destroy();
        $this->viewadmin("login");
    }
}


?>