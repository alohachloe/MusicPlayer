<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/main', 'MusicController::index');
$routes->get('/search', 'MusicController::search');
