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
            'templateJudul' => 'Data Pendukung ',
            'templateAtas' => 'Indikator '
        ];
        echo view('staff/header', $data);
        echo view('staff/indikator_spbe');
        echo view('staff/footer');
    }

    public function upload_pendukung()
    {
        $data = [
            'templateJudul' => 'Upload Data Pendukung',
            'templateAtas' => 'Indikator'
        ];
        echo view('staff/header', $data);
        echo view('staff/upload_pendukung');
        echo view('staff/footer');
    }

    public function upload_perIndikator()
    {
        $data = [
            'templateJudul' => 'Upload Data Pendukung',
            'templateAtas' => 'Indikator'
        ];
        echo view('staff/header', $data);
        echo view('staff/upload_perIndikator');
        echo view('staff/footer');
    }
    public function lihat_nilai()
    {
        $data = [
            'templateJudul' => 'Nilai',
            'templateAtas' => 'Indikator',
            'templateHal' => ' Dashboard',

        ];
        echo view('staff/header', $data);
        echo view('staff/lihat_nilai');
        echo view('staff/footer');
    }
    public function detail_nilai()
    {
        $data = [
            'templateJudul' => 'Detail Nilai',
            'templateAtas' => 'Indikator',
            'templateHal' => ' Nilai',

        ];
        echo view('staff/header', $data);
        echo view('staff/detail_nilai');
        echo view('staff/footer');
    }

    public function rincian_nilai()
    {
        $data = [
            'templateJudul' => 'Rincian Nilai',
            'templateAtas' => 'Indikator',
            'templateHal' => ' Nilai',

        ];
        echo view('staff/header', $data);
        echo view('staff/rincian_nilai');
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
