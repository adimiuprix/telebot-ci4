<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('send', 'Main::sendMesssage');
$routes->get('receive', 'Main::receiveMesssage');

$routes->get('hand', 'Commands::handle');

$routes->get('webhook', 'Webhook::set');
$routes->get('delete', 'Webhook::delete');