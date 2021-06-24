<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KontakModel;

class Kontak extends BaseController
{
	public function __construct()
	{
		$this->kontakModel = new KontakModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/kontak/index', [
			'title' => 'Kontak',
			'kontak' => $this->kontakModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/kontak/create', [
			'title' => 'Tambah Data Kontak'
		]);
	}

	public function create()
	{
		$data = [
		    'nama' => $this->request->getPost('nama'),
		    'email' => $this->request->getPost('email'),
		    'isi' => $this->request->getPost('isi'),
		];

		$this->kontakModel->insert($data);
		$this->session->setFlashdata('success', 'Data Kontak Berhasil Ditambahkan.');
		return redirect()->to('/admin/kontak');
	}

	public function delete($id)
	{
		$this->kontakModel->delete($id);
		$this->session->setFlashdata('success', 'Data Kontak Berhasil Dihapus.');
		return redirect()->to('/admin/kontak');
	}
}
