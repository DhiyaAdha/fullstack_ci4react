<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource('products', ['filter' => 'cors']);

// $routes->group('', ['filter' => 'cors'], function ($routes) {
//     $routes->get('products', 'Products::index');
//     $routes->get('products/(:num)', 'Products::show/$1');
//     $routes->post('products', 'Products::create');
//     $routes->put('products/(:num)', 'Products::update/$1');
//     $routes->delete('products/(:num)', 'Products::delete/$1');
// });

