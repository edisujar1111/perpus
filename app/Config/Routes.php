<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('admin', function ($routes) {
    $routes->add('/', 'Admin::index');
    $routes->group('buku', function ($routes) {
        $routes->add('/', 'Admin::data_buku');
        $routes->add('tambah-buku', 'Admin::tambah_buku');
        $routes->add('edit-buku/(:any)', 'Admin::edit_buku/$1');
        $routes->delete('delete/(:any)', 'Admin::delete_buku/$1');
    });
    $routes->group('anggota', function ($routes) {
        $routes->add('/', 'Admin::data_anggota');
        $routes->add('tambah-anggota', 'Admin::tambah_anggota');
        $routes->add('edit-anggota/(:any)', 'Admin::edit_anggota/$1');
    });
    $routes->group('data-master', function ($routes) {
        $routes->add('', 'Dmaster::data_master');
        $routes->add('tambah-denda', 'Dmaster::tambah_denda');
        $routes->add('edit-denda/(:num)', 'Dmaster::edit_denda/$1');
        $routes->delete('delete-denda/(:num)', 'Dmaster::delete_denda/$1');
        $routes->add('tambah-kategori', 'Dmaster::tambah_kategori');
        $routes->add('edit-kategori/(:num)', 'Dmaster::edit_kategori/$1');
        $routes->delete('delete-kategori/(:num)', 'Dmaster::delete_kategori/$1');
    });
    $routes->add('data-pengembalian', 'Admin::data_kembali');
    $routes->add('data-peminjaman', 'Admin::data_peminjaman');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
