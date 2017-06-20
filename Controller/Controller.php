<?php


abstract class Controller implements IController
{


    public function html()
    {
        $html = new View();
        $header  = $this->header();
        global $header;

        return $html->getView('html', []);
    }

    public function header()
    {

        $header = new View();
        return $header->getView('header', []);
    }

    public function footer()
    {
        $footer = new View();
        return $footer->getView('footer', []);
    }

    public function content()
    {
        $content = new View();
        return $content->getView('content', []);
    }
}

