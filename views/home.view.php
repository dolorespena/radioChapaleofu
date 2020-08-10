<?php

require_once 'controllers/homeController.php';
require_once 'views/base.view.php';

Class HomeView extends View{

    public function __construct(){
        parent::__construct();
    }

    public function showHome(){
        $this->getSmarty()->display('home.tpl');
    }

}