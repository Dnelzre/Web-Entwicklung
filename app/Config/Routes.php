<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('Startseite_Spalten', 'Home::spalten');

$routes->get('Startseite', 'spalten::index');

