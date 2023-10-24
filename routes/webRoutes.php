<?php

use Devlee\PHPRouter\Router;
use App\Controllers\MainController;

// use Devlee\PHPRouter\Router;

$HomeRoutes = Router::useRoute();

$HomeRoutes->get('/', [MainController::class, "Index"]);
$HomeRoutes->get('/search', [MainController::class, "Search"]);

// AddRoute
// RouteGroup
