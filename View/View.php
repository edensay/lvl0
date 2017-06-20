<?php


class View {




    public function getView($nameView, $paramView){
        $name = str_replace("/","",$nameView);
        if(file_exists('template/'.$name.'.html'))
        {
            $render = file_get_contents('template/'.$name.'.html');
            //var_dump($render);
            //$templateName = new $route();
        }
        else {
            //require_once '../Controller/error404.php';
            //$template = new error404();
        }
        var_dump($render);
        return $render;

    }
}

