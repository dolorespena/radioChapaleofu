<?php

require_once 'controllers/newsController.php';

class NewsView extends View{

    public function __construct(){
        parent::__construct();
    }

    public function newsHome(){
        $this->getSmarty()->display('news.tpl');
    }
}
