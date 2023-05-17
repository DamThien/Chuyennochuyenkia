<?php class Controller {
    public function model($model) {
        require_once "./Application/Models/$model.php";
        return new $model;
    }
    public function view($layout, $data=[]) {
        require_once "./Application/Views/Layouts/$layout.php";
    }

    public function viewadmin($layout, $data = [])
    {
        require_once "./Application/Views/Admin/$layout.php";
    }
}
