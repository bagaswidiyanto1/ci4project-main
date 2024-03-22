<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function get_user()
    {
        return $this->db->table('user')->get()->getResultArray();
    }

    public function insert_user($data)
    {
        return $this->db->table('user')->insert($data);
    }

    public function edit_user($id_user)
    {
        return $this->db->table('user')->where('id_user', $id_user)->get()->getRowArray();
    }

    public function update_user($data, $id_user)
    {
        return $this->db->table('user')->update($data, array('id_user' => $id_user));
    }

    public function delete_user($id_user)
    {
        return $this->db->table('user')->delete(array('id_user' => $id_user));
    }
}
