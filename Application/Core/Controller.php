<?php class Controller {
    public function model($model) {
        require_once "./Application/Models/$model.php";
        return new $model;
    }
    public function view($layout) {
        require_once "./Application/Views/Pages/$layout.php";
    }
}
