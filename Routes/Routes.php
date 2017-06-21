<?php


class Routes
{

    var $_routeName = FALSE;


    public function __construct()
    {

        $this->_routeName = str_replace('.php', '', $_GET['page']);
    }


    public function getRoute()
    {
        $route = str_replace("/", "", $this->_routeName);

        if (file_exists('Controller/' . $route . '.php')
        && ( $route != 'Controller'
            || $route != 'IController')
        ) {
            require_once 'Controller/' . $route . '.php';
            $controller = new $route();
            //var_dump('Controller utiliser : ' . $route);
        } else {
            require_once 'Controller/error404.php';
            $controller = new error404();
            //var_dump('Controller utiliser : error404');
        }
        return $controller;

    }

}