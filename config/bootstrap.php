<?php

use Devlee\PHPRouter\Router;
use Wakeable\App\Runner;


/**
 * Loading App Paths|Constants and Classes
 */
include_once __DIR__ . "/../vendor/autoload.php";
include_once __DIR__ . "/paths.php";

/**
 * Initializing App Router Package
 * @var Router $router
 */
$router = new Router(__DIR__);

/**
 * Initializing and Booting Application with Runner
 * @var Runner $app
 */
$app = new Runner($router);

/**
 * Loading Application Custom Routes
 * @var array<string, mixed> $routes
 */
$routes = scandir(ROUTES_PATH);

foreach ($routes as $route) {
  if (is_dir($route)) continue;
  include_once  ROUTES_PATH . '/' . $route;
}
