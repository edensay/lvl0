namespace function/template;

class content {

public function gcontent()
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