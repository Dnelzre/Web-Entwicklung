<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/**
$routes->get('task/create', 'Tasks::create');
$routes->get('/tasks_form', 'Tasks::create');
$routes->post('tasks_store', 'Tasks::store');

$routes->get('/', 'Home::index');

$routes->get('Startseite', 'Home::Startseite');

$routes->get('Startseite_Spalten', 'Home::spalten');

$routes->get('startseite-formular', 'Home::formular');

$routes->get('/personen', 'Personen::index');

$routes->get('/tasks_view', 'Tasks::index');

$routes->get('/tasks_form', 'Tasks::index');


// Übung 4 – Auto Routing aktivieren
$routes->setAutoRoute(true);
 **/
