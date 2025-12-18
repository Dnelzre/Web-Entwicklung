<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('Startseite', 'Home::Startseite');

$routes->get('Startseite_Spalten', 'Home::spalten');

$routes->get('startseite-formular', 'Home::formular');

$routes->get('/tasks', 'Tasks::index');

// Übung 4 – Auto Routing aktivieren
$routes->setAutoRoute(true);

//
//use CodeIgniter\Router\RouteCollection;
//
///**
// * @var RouteCollection $routes
// */
//$routes->get('/', 'Home::index');
//
//
//$routes->get('Startseite', 'Home::Startseite');
//
//$routes->get('Startseite_Spalten', 'Home::spalten');
//
//$routes->get('startseite-formular', 'Home::formular');
//
////Übung 4
//$routes->setAutoRoute(true);