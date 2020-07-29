<?php

    // creo el ruteador
    $router = new Router();

    // Tabla de ruteo
    $router->addRoute('home', 'GET', 'HomeController', 'showHome');

    //ruteo
    $router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);