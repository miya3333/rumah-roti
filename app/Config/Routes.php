<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
// $routes->get('/product', 'Product::index');
// $routes->get('/shop', 'Shop::index');
// $routes->get('/p_danish', 'Product::danish');
// $routes->get('/p_cake', 'Product::cake');
// $routes->get('/p_toast', 'Product::toast');
// $routes->get('/p_dcake', 'Product::dcake');
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/outlet', 'Outlet::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/product', 'Product::index');
$routes->get('/product/danish', 'Product::danish');
$routes->get('/product/cake', 'Product::cake');
$routes->get('/product/toast', 'Product::toast');
$routes->get('/product/dcake', 'Product::dcake');
$routes->get('/product/bread', 'Product::bread');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/create', 'Admin::create');
$routes->post('/admin/create', 'Admin::create');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1');