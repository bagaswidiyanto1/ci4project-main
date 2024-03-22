<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $KategoriModel;

    public function __construct()
    {
        helper('form');
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data Kategori',
            'kategori' => $this->KategoriModel->get_kategori(),
            'isi'   => 'kategori/v_kategori',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Kategori',
            'isi'   => 'kategori/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('kategori/index'));
        }
        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/gif,image/png,image/jpeg]|max_size[foto,20000]'
        ]);
        if ($validated == FALSE) {
            return $this->index();
        } else {
            $file_foto = $this->request->getFile('foto');
            $file_foto->move(ROOTPATH . 'public/upload');


            $data = [
                'nama' => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'foto' => $file_foto->getName(),
            ];
            $this->KategoriModel->insert_kategori($data);
            return redirect()->to(base_url('kategori/index'))->with('success', 'Data Berhasil Diupload');
        }
    }

    public function edit($ID)
    {
        $data = [
            'title' => 'Edit Data Kategori',
            'kategori' => $this->KategoriModel->edit_Kategori($ID),
            'isi'   => 'kategori/v_edit',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($ID)
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('kategori/index'));
        }
        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/gif,image/png,image/jpeg]|max_size[foto,20000]'
        ]);
        if ($validated == FALSE) {
            return $this->index();
        } else {
            //$file_foto = $this->request->getFile('foto');
            //$file_foto->move(ROOTPATH . 'public/upload');


            $fileFoto = $this->request->getFile('foto');
            $namaFoto = "";
            if ($fileFoto->getError() == 4) {
                $namaFoto = $this->request->getPost('gambarLama');
            } else {
                $fotoBaru = $fileFoto->getRandomName();
                $fileFoto->move(ROOTPATH . 'public/upload', $fotoBaru);
                $namaFoto = $fileFoto->getName();
                try {
                    // hapus data
                    $checkdata = file_exists(ROOTPATH . 'public/upload/' . $this->request->getPost('gambarLama'));
                    if ($checkdata) {
                        unlink(ROOTPATH . 'public/upload/' . $this->request->getPost('gambarLama'));
                    }
                } catch (Exception $e) {
                    // on error
                }
            }

            $data = [
                'nama' => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'foto' => $namaFoto,
            ];
            $this->KategoriModel->update_kategori($data, $ID);
            return redirect()->to(base_url('kategori/index'))->with('success', 'Data Berhasil Diupload');
        }
    }

    public function delete($ID, $fotoLama)
    {
        try {
            // hapus data
            $checkdata = file_exists(ROOTPATH . 'public/upload/' . $fotoLama);
            if ($checkdata) {
                unlink(ROOTPATH . 'public/upload/' . $fotoLama);
            }
        } catch (Exception $e) {
            // on error
        }
        $this->KategoriModel->delete_kategori($ID);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('kategori'));
    }
}
