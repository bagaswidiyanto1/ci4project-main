<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    public function get_kategori()
    {
        return $this->db->table('kategori')->get()->getResultArray();
    }

    public function insert_kategori($data)
    {
        return $this->db->table('kategori')->insert($data);
    }

    public function edit_kategori($ID)
    {
        return $this->db->table('kategori')->where('ID', $ID)->get()->getRowArray();
    }

    public function update_kategori($data, $ID)
    {
        return $this->db->table('kategori')->update($data, array('ID' => $ID));
    }

    public function delete_kategori($ID)
    {
        return $this->db->table('kategori')->delete(array('ID' => $ID));
    }
}
