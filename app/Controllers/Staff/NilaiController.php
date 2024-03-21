<?php

namespace App\Controllers\Staff;

use App\Models\NilaiModel;


use App\Controllers\BaseController;

use CodeIgniter\Config\Config;

class NilaiController extends BaseController
{
    protected $nilaiModel;



    public function __construct()
    {
        $this->nilaiModel = new NilaiModel();

    }
    public function indikator_spbe()
    {
        $data = [
            'templateJudul' => 'Indikator SPBE ',
            'templateAtas' => 'Indikator '
        ];
        echo view('staff/header', $data);
        echo view('staff/indikator_spbe');
        echo view('staff/footer');
    }

    public function upload_pendukung()
    {
        $data = [
            'templateJudul' => 'Upload Pendukung',
            'templateAtas' => 'Indikator'
        ];
        echo view('staff/header', $data);
        echo view('staff/upload_pendukung');
        echo view('staff/footer');
    }
   
    public function tambah_pendukung()
    {
        $data = [
            'templateJudul' => 'Tambah Pendukung',
            'templateAtas' => 'Indikator'
        ];
        echo view('staff/header', $data);
        echo view('staff/tambah_pendukung');
        echo view('staff/footer');
    }

    public function unduh_peraturan()
    {
        $data = [
            'templateJudul' => 'Dokumen Peraturan',
            'templateAtas' => 'Peraturan'
        ];
        echo view('staff/header', $data);
        echo view('staff/unduh_peraturan');
        echo view('staff/footer');
    }
    
   
}
