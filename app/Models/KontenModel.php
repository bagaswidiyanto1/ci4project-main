<?php

namespace App\Models;

use App\Controllers\Kategori;
use CodeIgniter\Model;

class KontenModel extends Model
{
    public function get_konten()
    {
        return $this->db->table('konten kn')
            ->select('kn.*, kt.nama as nama_kategori')
            ->join('kategori kt', 'kn.ID=kt.ID')
            ->get()->getResultArray();
    }

    // public function insert_konten($data)
    // {
    //     return $this->db->table('konten')->insert($data);
    // }

    // public function edit_konten($ID)
    // {
    //     return $this->db->table('konten')->where('ID', $ID)->get()->getRowArray();
    // }

    // public function update_konten($data, $ID)
    // {
    //     return $this->db->table('konten')->update($data, array('ID' => $ID));
    // }

    // public function delete_konten($ID)
    // {
    //     return $this->db->table('konten')->delete(array('ID' => $ID));
    // }
}
