<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', function ($routes) {
    $routes->add('login', 'Admin\Admin::login');
    $routes->add('sukses', 'Admin\Admin::sukses');
});
