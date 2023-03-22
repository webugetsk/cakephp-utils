<?php
use Cake\Routing\RouteBuilder;

/** @var \Cake\Routing\RouteBuilder $routes */

$routes->plugin('Utils', function ($routes) {
    $routes->fallbacks();
});
