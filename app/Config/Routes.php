<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'Home::index');


$routes->get('/anggota', 'AnggotaController::index');
$routes->get('/anggota/create', 'AnggotaController::create');
$routes->post('/anggota/store', 'AnggotaController::store');
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/anggota/update/(:num)', 'AnggotaController::update/$1');
$routes->get('/anggota/delete/(:num)', 'AnggotaController::delete/$1');

$routes->get('/petugas', 'PetugasController::index');
$routes->get('/petugas/create', 'PetugasController::create');
$routes->post('/petugas/store', 'PetugasController::store');
$routes->get('/petugas/edit/(:num)', 'PetugasController::edit/$1');
$routes->post('/petugas/update/(:num)', 'PetugasController::update/$1');
$routes->get('/petugas/delete/(:num)', 'PetugasController::delete/$1');

$routes->get('/simpanan_wajib', 'SimpananWajibController::index');
$routes->get('/simpanan_wajib/create', 'SimpananWajibController::create');
$routes->post('/simpanan_wajib/store', 'SimpananWajibController::store');
$routes->get('/simpanan_wajib/edit/(:num)', 'SimpananWajibController::edit/$1');
$routes->post('/simpanan_wajib/update/(:num)', 'SimpananWajibController::update/$1');
$routes->get('/simpanan_wajib/delete/(:num)', 'SimpananWajibController::delete/$1');

$routes->get('/simpanan_pokok', 'SimpananPokokController::index');
$routes->get('/simpanan_pokok/create', 'SimpananPokokController::create');
$routes->post('/simpanan_pokok/store', 'SimpananPokokController::store');
$routes->get('/simpanan_pokok/edit/(:num)', 'SimpananPokokController::edit/$1');
$routes->post('/simpanan_pokok/update/(:num)', 'SimpananPokokController::update/$1');
$routes->get('/simpanan_pokok/delete/(:num)', 'SimpananPokokController::delete/$1');

$routes->get('/transaksi', 'TransaksiController::index');
$routes->get('/transaksi/create', 'TransaksiController::create');
$routes->post('/transaksi/store', 'TransaksiController::store');
$routes->get('/transaksi/edit/(:num)', 'TransaksiController::edit/$1');
$routes->post('/transaksi/update', 'TransaksiController::update');
$routes->get('/transaksi/delete/(:num)', 'TransaksiController::delete/$1');

$routes->get('/saldo', 'SaldoController::index');

$routes->get('/login', 'Auth::login');
$routes->post('/auth/check', 'Auth::check');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/create', 'Auth::create');
$routes->get('/logout', 'Auth::logout');

$routes->get('/profile', 'Profile::index');

//routes untuk angsuran
$routes->get('/angsuran', 'Angsuran::index');
$routes->get('/angsuran/create', 'Angsuran::create');
$routes->post('/angsuran/store', 'Angsuran::store');
$routes->get('/angsuran/edit/(:segment)', 'Angsuran::edit/$1');
$routes->post('/angsuran/update/(:segment)', 'Angsuran::update/$1');
$routes->get('/angsuran/delete/(:segment)', 'Angsuran::delete/$1');

//routes untuk bunga
$routes->get('/bunga', 'Bunga::index');
$routes->get('/bunga/create', 'Bunga::create');
$routes->post('/bunga/store', 'Bunga::store');
$routes->get('/bunga/edit/(:segment)', 'Bunga::edit/$1');
$routes->post('/bunga/update/(:segment)', 'Bunga::update/$1');
$routes->get('/bunga/delete/(:segment)', 'Bunga::delete/$1');

//routes untuk pinjaman
$routes->get('/pinjaman', 'Pinjaman::index');
$routes->get('/pinjaman/create', 'Pinjaman::create');
$routes->post('/pinjaman/store', 'Pinjaman::store');
$routes->get('/pinjaman/edit/(:segment)', 'Pinjaman::edit/$1');
$routes->post('/pinjaman/update/(:segment)', 'Pinjaman::update/$1');
$routes->get('/pinjaman/delete/(:segment)', 'Pinjaman::delete/$1');
