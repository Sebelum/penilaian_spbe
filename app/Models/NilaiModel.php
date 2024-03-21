<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'antrian';
    // protected $primaryKey       = 'id';
    protected $primaryKey       = 'id_antri';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['no_kes','nama_pasien', 'tanggal_periksa','id_faskes','cara_bayar','resepsionis','keterangan'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

 
    public function saveAntrian ($data){
        $this->insert($data);
    }

    public function getPeraturan ($id = null){
        if($id != null){
            return $this->select('antrian.*, faskes.nama_faskes')
            ->join('faskes', 'faskes.id_faskes=antrian.id_faskes')
          
            ->find($id);
        }
        return $this->select('antrian.*, faskes.nama_faskes')
            ->join('faskes', 'faskes.id_faskes=antrian.id_faskes')
          
            ->find();    
    }

    

    public function updateAntrian ($data, $id){
        return $this->update($id, $data);
    }

    public function deleteAntrian ($id){

        return $this->delete($id);

    }

    
}
