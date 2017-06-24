<?php

namespace Composant\Controller;


use Core\Controller\IController;
use Core\view\view;

class contact implements IController
{


    public static function render()
    {
        $view = new view();
        $render = $view->render('contact', []);
        return $render;
    }


}