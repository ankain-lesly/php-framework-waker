<?php

use Devlee\Framework\Waker\Application;
use Devlee\PHPRouter\Router;

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
 * 
 * @var Router $router
 */
$router = new Router(__DIR__);

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
