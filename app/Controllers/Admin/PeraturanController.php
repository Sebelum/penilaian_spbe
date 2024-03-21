<?php

namespace App\Controllers\Admin;

use App\Models\PeraturanModel;


use App\Controllers\BaseController;

use CodeIgniter\Config\Config;

class PeraturanController extends BaseController
{
    protected $peraturanModel;



    public function __construct()
    {
        $this->peraturanModel = new PeraturanModel();

    }

    public function dokumen_peraturan()
    {
        $data = [
            'templateJudul' => 'Dokumen Peraturan',
            'templateAtas' => 'Peraturan'
        ];
        echo view('admin/header', $data);
        echo view('admin/dokumen_peraturan');
        echo view('admin/footer');
    }
   
    public function tambah_dokumen()
    {
        $data = [
            'templateJudul' => 'Tambah Peraturan',
            'templateAtas' => 'Peraturan'
        ];
        echo view('admin/header', $data);
        echo view('admin/tambah_dokumen');
        echo view('admin/footer');
    }
    public function edit_dokumen()
    {
      
        $data = [
            'templateJudul' => 'Edit Peraturan',
            'templateAtas' => 'Peraturan'
        ];
        echo view('admin/header', $data);
        echo view('admin/edit_dokumen');
        echo view('admin/footer');    
    }

    public function delete_dokumen()
    {
      
        $data = [
            'templateJudul' => 'Upload Peraturan',
            'templateAtas' => 'Peraturan'
        ];
        echo view('admin/header', $data);
        echo view('admin/dokumen_peraturan');
        echo view('admin/footer');    
    }
    
   
}
