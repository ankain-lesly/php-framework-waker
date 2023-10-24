<?php

use Devlee\PHPRouter\Router;
use App\Controllers\MainController;

// use Devlee\PHPRouter\Router;

$postRoutes = Router::useRoute();

$postRoutes->get('/posts', [MainController::class, "Index"]);
$postRoutes->get('/read/{slug}', [MainController::class, "Read"]);

// AddRoute
// RouteGroup
