<?php

require_once 'views/news.view.php';
require_once 'models/news.model.php';

class NewsController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new NewsModel();
        $this->view = new NewsView();
    }

    public function showNews(){
        $this->view->newsHome();
    }
}