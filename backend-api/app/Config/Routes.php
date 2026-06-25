<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Halaman Welcome Default CodeIgniter
$routes->get('/', 'Home::index');

// GROUP API UNTUK FRONTEND PINKYSTOCK
$routes->group('api', function($routes) {
    
    // 1. Rute Login dibebaskan dari filter agar bisa diakses langsung
    $routes->post('login', 'Auth::login');

    // 2. Rute CRUD Barang (DIBEBASKAN SEMENTARA DARI FILTER DEMI KELANCARAN BYPASS UAS)
    // Pengaturan filter dihilangkan agar frontend Vue bisa langsung menyimpan data ke MySQL tanpa kendala token
    $routes->get('barang', 'Barang::index');
    $routes->post('barang', 'Barang::insert');
    $routes->put('barang/(:any)', 'Barang::update/$1');
    $routes->delete('barang/(:any)', 'Barang::delete/$1');
});