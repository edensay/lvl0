<?php

namespace Composant\Controller;


use Core\Controller\IController;
use Core\view\view;

class gamelist implements IController
{


    public static function render()
    {
        $view = new view();
        $render = $view->render('gamelist', []);
        return $render;
    }


}