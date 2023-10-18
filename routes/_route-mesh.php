<?php

use Devlee\PHPRouter\Router;

return function (Router $app) {
  $app->get('/', [SiteController::class, "index"]);
  $app->both('/contact', [SiteController::class, "Contact"]);
};

$homeRoutes = require(ROUTES_PATH . 'homeRoutes.php');
$blogRoutes = require(ROUTES_PATH . 'blogRoutes.php');

$router->useRoutes([$homeRoutes, $blogRoutes]);

$homeRoutes($router);
$blogRoutes($router);
