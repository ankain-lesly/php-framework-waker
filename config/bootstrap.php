<?php

use Devlee\Framework\Waker\Application;
use Devlee\WakerRouter\Router;

/**
 * Load Application class files with composer autoload
 */
include_once __DIR__ . "/../vendor/autoload.php";

/**
 * Loading App Paths|Constants
 */
include_once __DIR__ . "/paths.php";

/**
 * Initializing App Router Package from Devlee
 * Object requires path to view|templates folder
 * 
 * @var Router $router
 */
$router = new Router(VIEWS_PATH);

/**
 * Get and Set the Root Directory of the Application
 * 
 * @var string $root_path
 */

$root_path = dirname(__DIR__);

/**
 * Initialize and Boot Application and Interfaces
 * 
 * @var Application $app
 */
$app = new Application($router, $root_path);
