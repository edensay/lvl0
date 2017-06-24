<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'Controller/IController.php';
require_once 'Controller/Controller.php';

$loader = new Twig_Loader_Filesystem('templates'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
    'cache' => false
));


$template = $twig->loadTemplate('index.twig'); // Appel Index.twig
echo $template->render(array(
));

/*

function __autoload($className)
{
    $folder = "./libs/";
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    include $folder . $fileName;
}

$c = new \function\template\content();
$c->gcontent();

use function\template\content;
$d = new content();
$d->gcontent();
*/