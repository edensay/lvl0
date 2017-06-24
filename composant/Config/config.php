<?php

namespace Composant\Config;

use Core\lib\Spyc;

class config
{

    private static $_instance;
    private static $_config;

    private function __construct()
    {
        $file = Spyc::YAMLLoad(ROOT . 'composant/config.yml');
        self::$_config = $file;
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new config();
        }
        return self::$_instance;
    }

    public function get($configName)
    {
        return (isset(self::$_config[$configName]) ? self::$_config[$configName] : FALSE);
    }

}


