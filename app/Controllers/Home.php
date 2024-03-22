<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'isi' => 'v_dashboard',
		];
		echo view('layout/v_wrapper', $data);
	}
}
