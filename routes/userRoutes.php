<?php

use App\Controllers\PostController;
use Devlee\WakerRouter\Router;

// use Devlee\PHPRouter\Router;

$UserRoutes = Router::useRoute();

$UserRoutes->get('/app', [PostController::class, "Index"]);
$UserRoutes->both('/posts/create', [PostController::class, "ManagePost"]);
$UserRoutes->both('/posts/edit/{post_id}', [PostController::class, "ManagePost"]);

// AddRoute
// RouteGroup
