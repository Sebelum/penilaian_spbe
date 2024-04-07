<?php

namespace App\Controllers\Reviewer;

use App\Models\PeraturanModel;

use App\Controllers\BaseController;

use CodeIgniter\Config\Config;

class Beranda extends BaseController
{
    protected $peraturanModel;

    public function __construct()
    {
        $this->peraturanModel = new PeraturanModel();

    }

    public function v_dashboard()
    {
        $data = [
            'templateAtas' => 'Dashboard',
            'templateJudul' => 'Bobot Penilaian'
        ];
        echo view('reviewer/header', $data);
        echo view('reviewer/v_dashboard');
        echo view('reviewer/footer');
    }
   
}
