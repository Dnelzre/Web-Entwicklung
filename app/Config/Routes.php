<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('Startseite', 'Home::Startseite');
$routes->get('Startseite_Spalten', 'Home::spalten');
$routes->get('startseite-formular', 'Home::formular');

// Dashboard
$routes->get('dashboard', 'Home::getDashboard');


$routes->get('personen', 'Personen::index');


$routes->get('tasks', 'Tasks::getIndex');
$routes->get('tasks/create', 'Tasks::getCreate');
$routes->post('tasks/submit', 'Tasks::postSubmit');
$routes->get('tasks/edit/(:num)', 'Tasks::getEdit/$1');
$routes->post('tasks/edit/(:num)', 'Tasks::postEdit/$1');
$routes->get('tasks/delete/(:num)', 'Tasks::getDelete/$1');


$routes->post('tasks/updateOrder', 'Tasks::updateOrder');


$routes->setAutoRoute(true);
