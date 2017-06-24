<?php


abstract class Controller implements IController
{
    public function content()
    {
        $page = htmlspecialchars($_GET["page"]);
        if($page = "accueil") {
            include('accueil.html'); }
        Else if($page = "gamelist") {
            include('gameslist.html'); }
        Else if($page = "contact") {
            include('contact.html'); }
        Else if($page = "gameA") {
            include('GameA.html'); }
        Else if($page = "gameB") {
            include('GameB.html'); };

    }

}

/* Ou alors  if(htmlspecialchars($_GET["page"]) = "accueil") {
                $accueil = new View();
                return $accueil->getView('accueil', []); }

htmlspecialchars($_POST["page"]) pour que le ?page=... ne soit pas visible
*/

