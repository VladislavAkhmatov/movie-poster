<?php
session_start();
ob_start();
require_once __DIR__ . "/../vendor/autoload.php";
use App\Routing;
use App\Config;
use App\Post;

Config::Start();
Config::checkAuth();

if(!isset($_SESSION['id'])) {
    Routing::Route('/auth/register', 'auth/register');
    Routing::Route('/auth/login', 'auth/login', [Post::register()]);
}
require_once "../views/layout/header.php";

Routing::Route('/', 'main/main', [Post::login(), Post::createFilm()]);
if(isset($_SESSION['id'])){
    Routing::Route('/film', 'main/film');
    Routing::Route('/mytickets', 'main/mytickets', [Post::buyTicket()]);
    if($_SESSION['role'] == "admin"){
        Routing::Route('/film/create', 'main/create');
    }
    ob_clean();
    Routing::Route('/qr', 'main/qr');
}


require_once "../views/layout/footer.php";
Routing::Error();
ob_end_flush();
