<?php

namespace Core\Controller;

use Core\lib\Spyc;

class Controller
{

    public static function dispatcher()
    {
        return self::getRoute(self::getFile());
    }

    private static function getRoute($routes)
    {
        if ($_GET['page'] == '') {
            return call_user_func(['Composant\controller\accueil', 'render']);
        }
        foreach ($routes as $route) {
            if ($route['path'] == $_GET['page']) {
                return call_user_func([$route['controller'], 'render']);
            }
        }
        return call_user_func(['Composant\controller\erreur404', 'render']);
    }

    private static function getFile()
    {
        return Spyc::YAMLLoad(ROOT . 'composant/routing.yml');

    }

}

