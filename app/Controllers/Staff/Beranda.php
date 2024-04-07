<?php

namespace App\Controllers\Staff;

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
            'templateJudul' => 'Dashboard',
            'templateAtas' => 'Dashboard'
        ];
        echo view('staff/header', $data);
        echo view('staff/v_dashboard');
        echo view('staff/footer');
    }
    public function pengguna()
    {
        $data = [
            'templateJudul' => 'Pengguna',
            'templateAtas' => 'Pengguna'
        ];
        echo view('admin/header', $data);
        echo view('admin/pengguna');
        echo view('admin/footer');
    }
   
    
   
}
