<?php

use Devlee\PHPRouter\Router;
use App\Controllers\SiteController;

// use Devlee\PHPRouter\Router;

$HomeRoutes = Router::useRoute();

$HomeRoutes->get('/', [SiteController::class, "Home"]);
$HomeRoutes->both('/contact', [SiteController::class, "Contact"]);
$HomeRoutes->get('/about', [SiteController::class, "About"]);
$HomeRoutes->get('/blog', [SiteController::class, "Blog"]);
$HomeRoutes->get('/blog/{post_id}', [SiteController::class, "Article"]);

// AddRoute
// RouteGroup
