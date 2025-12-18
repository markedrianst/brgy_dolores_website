<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/news_updates', 'Home::news_updates');

$routes->get('/services/(:segment)', 'ServiceController::form/$1');