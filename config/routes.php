<?php
use Cake\Routing\Router;

/** @var \Cake\Routing\RouteBuilder $routes */

$routes->plugin('Utils', function ($routes) {
    $routes->fallbacks();
});
