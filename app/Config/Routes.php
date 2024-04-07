<?php

use App\Controllers\UserController;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('login', [UserController::class, 'login']);
$routes->add('register', [UserController::class, 'register']);


$routes->add('/lupapassword', [UserController::class, 'lupapassword']);
$routes->add('/resetpassword', [UserController::class, 'resetpassword']);

$routes->add('logout', [UserController::class, 'logout']);



// ----------------------------------ADMIN----------------------------------------------
$routes->group('admin', function ($routes) {
    $routes->add('v_dashboard', 'Admin\Beranda::v_dashboard');
    $routes->add('pengguna', 'Admin\Beranda::pengguna');


// Dokumen peraturan
    $routes->add('dokumen_peraturan', 'Admin\PeraturanController::dokumen_peraturan');
    $routes->add('tambah_dokumen', 'Admin\PeraturanController::tambah_dokumen');
    $routes->add('edit_dokumen', 'Admin\PeraturanController::edit_dokumen');
    $routes->add('delete_dokumen', 'Admin\PeraturanController::delete_dokumen');


});

// ----------------------------------STAFF----------------------------------------------
$routes->group('staff', function ($routes) {
    
    $routes->add('v_dashboard', 'Staff\Beranda::v_dashboard');

// Nilai Data Pendukung
    $routes->add('lihat_nilai', 'Staff\NilaiController::lihat_nilai');
    $routes->add('detail_nilai', 'Staff\NilaiController::detail_nilai');
    $routes->add('rincian_nilai', 'Staff\NilaiController::rincian_nilai');


// Unduh Data Pendukung
    $routes->add('unduh_peraturan', 'Staff\NilaiController::unduh_peraturan');

// Upload Data Pendukung
    $routes->add('indikator_spbe', 'Staff\NilaiController::indikator_spbe');
    $routes->add('upload_pendukung', 'Staff\NilaiController::upload_pendukung');
    $routes->add('upload_perIndikator', 'Staff\NilaiController::upload_perIndikator');
    $routes->add('tambah_pendukung', 'Staff\NilaiController::tambah_pendukung');

});

// ---------------------------------REVIEWER----------------------------------------------
$routes->group('reviewer', function ($routes) {
    
    $routes->add('v_dashboard', 'Reviewer\Beranda::v_dashboard');

    $routes->add('bobot_penilaian', 'Reviewer\NilaiController::bobot_penilaian');
//crud domain
    $routes->add('domain_tambah', 'Reviewer\NilaiController::domain_tambah');
    $routes->add('edit_domain', 'Reviewer\NilaiController::edit_domain');
    $routes->add('delete_domain', 'Reviewer\NilaiController::delete_domain');

//crud aspek
    $routes->add('aspek_tambah', 'Reviewer\NilaiController::aspek_tambah');
    $routes->add('edit_aspek', 'Reviewer\NilaiController::edit_aspek');
    $routes->add('delete_aspek', 'Reviewer\NilaiController::delete_aspek');

//crud indikator
    $routes->add('indikator_tambah', 'Reviewer\NilaiController::indikator_tambah');
    $routes->add('edit_indikator', 'Reviewer\NilaiController::edit_indikator');
    $routes->add('delete_indikator', 'Reviewer\NilaiController::delete_indikator');

//penilaian
    $routes->add('belum_dinilai', 'Reviewer\NilaiController::belum_dinilai');
    $routes->add('rekap_nilai', 'Reviewer\NilaiController::rekap_nilai');
    $routes->add('form_nilai', 'Reviewer\NilaiController::form_nilai');
    $routes->add('menilai', 'Reviewer\NilaiController::menilai');

    $routes->add('detail_nilai', 'Reviewer\NilaiController::detail_nilai');


});