<?php

namespace App\Controllers\Reviewer;

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
    public function bobot_penilaian()
    {
        $data = [
            'templateAtas' => 'Bobot Penilaian ',
            'templateJudul' => 'Domain Aspek Indikator '
        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/bobot_penilaian');
        echo view('reviewer/footer');
    }

    public function penilaian()
    {
        $data = [
            'templateJudul' => 'Penilaian Data',
            'templateAtas' => 'Indikator'
        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/upload_pendukung');
        echo view('reviewer/footer');
    }

    public function domain_tambah()
    {
        $data = [
            'templateAtas' => 'Bobot Penilaian',
            'templateJudul' => 'Tambah Domain',
            'templateHal' => 'Domain'

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/domain_tambah');
        echo view('reviewer/footer');
    }

    public function edit_domain()
    {
        $data = [
            'templateAtas' => 'Bobot Penilaian',
            'templateJudul' => 'Edit Domain',
            'templateHal' => 'Domain'
        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/edit_domain');
        echo view('reviewer/footer');
    } 

    public function aspek_tambah()
    {
        $data = [
            'templateAtas' => 'Bobot Penilaian',
            'templateJudul' => 'Tambah Aspek',
            'templateHal' => 'Aspek'

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/aspek_tambah');
        echo view('reviewer/footer');
    }

    public function edit_aspek()
    {
        $data = [
            'templateAtas' => 'Bobot Penilaian',
            'templateJudul' => 'Edit Aspek',
            'templateHal' => 'Aspek'

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/edit_aspek');
        echo view('reviewer/footer');
    }

    public function indikator_tambah()
    {
        $data = [
            'templateAtas' => 'Bobot Penilaian',
            'templateJudul' => 'Tambah Indikator',
            'templateHal' => 'Indikator'

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/indikator_tambah');
        echo view('reviewer/footer');
    }

    public function edit_indikator()
    {
        $data = [
            'templateAtas' => 'Bobot Penilaian',
            'templateJudul' => 'Tambah Indikator',
            'templateHal' => 'Indikator'

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/edit_indikator');
        echo view('reviewer/footer');
    }

    public function belum_dinilai()
    {
        $data = [
            'templateAtas' => 'Penilaian',
            'templateJudul' => 'Belum Dinilai',
            'templateHal' => 'Dashboard',


        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/belum_dinilai');
        echo view('reviewer/footer');
    }

    public function rekap_nilai()
    {
        $data = [
            'templateAtas' => 'Penilaian',
            'templateJudul' => 'Rekap Nilai',
            'templateHal' => 'Dashboard',


        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/rekap_nilai');
        echo view('reviewer/footer');
    }

    public function form_nilai()
    {
        $data = [
            'templateAtas' => 'Penilaian',
            'templateHal' => 'Belum Dinilai',
            'templateJudul' => 'Data yang akan dinilai',

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/form_nilai');
        echo view('reviewer/footer');
    }

    public function menilai()
    {
        $data = [
            'templateAtas' => 'Penilaian',
            'templateHal' => 'Belum Dinilai',

            'templateJudul' => 'Menilai Data',

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/menilai');
        echo view('reviewer/footer');
    }
    public function detail_nilai()
    {
        $data = [
            'templateAtas' => 'Penilaian',
            'templateHal' => 'Rekap Nilai',

            'templateJudul' => 'Detail Nilai',

        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/detail_nilai');
        echo view('reviewer/footer');
    }
   
}
