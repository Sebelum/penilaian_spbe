<?php

use App\Controllers\UserController;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('login', [UserController::class, 'login']);

$routes->add('/lupapassword', [UserController::class, 'lupapassword']);
$routes->add('/resetpassword', [UserController::class, 'resetpassword']);

$routes->add('logout', [UserController::class, 'logout']);



// ----------------------------------ADMIN----------------------------------------------
$routes->group('admin', function ($routes) {
    $routes->add('beranda', 'Admin\Beranda::beranda');
    $routes->add('v_dashboard', 'Admin\Beranda::v_dashboard');

// Dokumen peraturan
    $routes->add('dokumen_peraturan', 'Admin\PeraturanController::dokumen_peraturan');
    $routes->add('tambah_dokumen', 'Admin\PeraturanController::tambah_dokumen');
    $routes->add('edit_dokumen', 'Admin\PeraturanController::edit_dokumen');
    $routes->add('delete_dokumen', 'Admin\PeraturanController::delete_dokumen');


});

// ----------------------------------STAFF----------------------------------------------
$routes->group('staff', function ($routes) {
    
// Nilai Data Pendukung
    $routes->add('lihat_nilai', 'Staff\NilaiController::lihat_nilai');

// Unduh Data Pendukung
    $routes->add('unduh_peraturan', 'Staff\NilaiController::unduh_peraturan');

// Upload Data Pendukung
    $routes->add('indikator_spbe', 'Staff\NilaiController::indikator_spbe');
    $routes->add('upload_pendukung', 'Staff\NilaiController::upload_pendukung');
    $routes->add('tambah_pendukung', 'Staff\NilaiController::tambah_pendukung');

});