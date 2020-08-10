<?php

require_once 'views/home.view.php';
require_once 'models/home.model.php';

class HomeController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }

    public function showHome(){
        $this->view->showHome();
    }
}