<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data User',
            'user' => $this->UserModel->get_user(),
            'isi'   => 'user/v_user',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data User',
            'isi'   => 'user/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        // enkripsi password2
        $password = hash('sha1', $this->request->getPost('password'));
        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $password,
            'level' => $this->request->getPost('level'),
        ];
        $this->UserModel->insert_user($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('user'));
    }

    public function edit($id_user)
    {
        $data = [
            'title' => 'Edit Data User',
            'user' => $this->UserModel->edit_user($id_user),
            'isi'   => 'user/v_edit',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id_user)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];
        $this->UserModel->update_user($data, $id_user);

        session()->setFlashdata('success', 'Data berhasil diupdate');
        return redirect()->to(base_url('user'));
    }

    public function delete($id_user)
    {
        $this->UserModel->delete_user($id_user);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('user'));
    }
}
