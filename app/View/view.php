<?php

namespace Core\view;

use Composant\Config\config;
use Twig_Environment;
use Twig_Loader_Filesystem;

class view
{


    public static function render($template, $datas = [])
    {
        //Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem(ROOT . 'composant/Templates/');
        $config = config::getInstance();
        $twigCache = $config->get('config_cache');
        if ($twigCache['twig_cache_active'] != 0) {
            $cacheArray = [
                'cache' => ROOT . $twigCache['twig_cache_path'], // l'emplacement de la génération de cache
            ];
        } else {
            $cacheArray = [];
        }

        $twig = new Twig_Environment($loader, $cacheArray);

        $varHeader = (isset($datas['header']) ? $datas['header'] : []);
        $varContent = (isset($datas['content']) ? $datas['content'] : []);
        $varFooter = (isset($datas['footer']) ? $datas['footer'] : []);

        $header = $twig->render('region/header.twig', $varHeader);
        $content = $twig->render('page/' . $template . '.twig', $varContent);
        $footer = $twig->render('region/footer.twig', $varFooter);

        print $twig->render('index.twig',
            [
                'header' => $header,
                'content' => $content,
                'footer' => $footer,
            ]
        );


    }

}