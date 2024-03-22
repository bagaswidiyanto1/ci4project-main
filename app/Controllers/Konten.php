<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KontenModel;

class Konten extends BaseController
{
    protected $KontenModel;

    public function __construct()
    {
        helper('form');
        $this->KontenModel = new KontenModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data Konten',
            'konten' => $this->KontenModel->get_konten(),
            'isi'   => 'konten/v_konten',
        ];
        echo view('layout/v_wrapper', $data);
    }
}
