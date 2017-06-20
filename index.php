<?php
/**
 * @files : index.php
 */
require_once 'Controller/IController.php';
require_once 'Controller/Controller.php';
require_once 'Routes/Routes.php';
require_once 'View/View.php';
require_once 'template/header.html';
require_once 'template/content.html';
require_once 'template/footer.html';




$route = new Routes();
$controllerName = $route->getRoute();

//echo $controllerName->header();
echo $controllerName->html();
//echo $controllerName->render();
//echo $controllerName->footer();
