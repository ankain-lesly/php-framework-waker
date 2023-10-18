<?php

/**
 * Getting Custom Routes
 *
 * @var array<string> $AppRoutes
 */
$AppRoutes = scandir(ROUTES_PATH);

/**
 * Loading Application Routes
 *
 * @param string $route
 * @param array<string, mixed> $AppRoutes
 */
foreach ($AppRoutes as $route) {
  if (is_dir($route)) continue;
  include_once ROUTES_PATH . '/' . $route;
}
