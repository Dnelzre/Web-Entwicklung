<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*
|--------------------------------------------------------------------------
| Home / Startseiten
|--------------------------------------------------------------------------
*/

$routes->get('/', 'Home::index');
$routes->get('Startseite', 'Home::Startseite');
$routes->get('Startseite_Spalten', 'Home::spalten');
$routes->get('startseite-formular', 'Home::formular');

// Dashboard
$routes->get('dashboard', 'Home::getDashboard');


/*
|--------------------------------------------------------------------------
| Personen
|--------------------------------------------------------------------------
*/

$routes->get('personen', 'Personen::index');


/*
|--------------------------------------------------------------------------
| Tasks (Board)
|--------------------------------------------------------------------------
*/

$routes->get('tasks', 'Tasks::getIndex');
$routes->get('tasks/create', 'Tasks::getCreate');
$routes->post('tasks/submit', 'Tasks::postSubmit');
$routes->get('tasks/edit/(:num)', 'Tasks::getEdit/$1');
$routes->post('tasks/edit/(:num)', 'Tasks::postEdit/$1');
$routes->get('tasks/delete/(:num)', 'Tasks::getDelete/$1');


/*
|--------------------------------------------------------------------------
| AJAX (WICHTIG)
|--------------------------------------------------------------------------
*/

$routes->post('tasks/updateOrder', 'Tasks::updateOrder');


/*
|--------------------------------------------------------------------------
| Spalten (FIX für Whoops bei /spalten/submit)
|--------------------------------------------------------------------------
| Grund: POST Auto-Routing funktioniert auf vielen Servern nicht zuverlässig.
| Deshalb explizite POST-Route für submit definieren.
*/
//
//$routes->get('spalten', 'Spalten::getIndex');
//$routes->get('spalten/edit/(:num)', 'Spalten::getEdit/$1');
//$routes->post('spalten/submit', 'Spalten::postSubmit');
//$routes->post('spalten/submit/(:num)', 'Spalten::postSubmit/$1');
//$routes->get('spalten/delete/(:num)', 'Spalten::getDelete/$1');


/*
|--------------------------------------------------------------------------
| AutoRoute (wie bisher aktiv lassen)
|--------------------------------------------------------------------------
*/

$routes->setAutoRoute(true);
