<?php
session_start();
ob_start();
require_once __DIR__ . "/../vendor/autoload.php";

use App\Routing;
use App\Config;
use App\Post;
$uri = $_SERVER['REQUEST_URI'];

Config::Start();

require_once "../views/layout/header.php";
Config::checkAuth();
Routing::Route('/', 'main/main', [Post::register(), Post::login()]);
Routing::Route('/auth/login', 'auth/login');
Routing::Route('/auth/register', 'auth/register');

Routing::Error();
ob_end_flush();

require_once "../views/layout/footer.php";

