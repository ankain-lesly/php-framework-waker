<?php

use App\Controllers\AuthController;
use Devlee\WakerRouter\Router;

// use Devlee\PHPRouter\Router;

/**
 * using AuthRoutesMiddleWare
 */
$HomeRoutes = Router::useRoute();

$HomeRoutes->both('/signup', [AuthController::class, "Signup"]);
$HomeRoutes->both('/login', [AuthController::class, "Login"]);
$HomeRoutes->both('/logout', [AuthController::class, "Logout"]);

// AddRoute
// RouteGroup
