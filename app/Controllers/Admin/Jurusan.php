<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
	public function __construct()
	{
		$this->jurusanModel = new JurusanModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/jurusan/index', [
			'title' => 'Jurusan',
			'jurusans' => $this->jurusanModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/jurusan/create', [
			'title' => 'Tambah Data Jurusan'
		]);
	}

	public function create()
	{
		$data = [
		    'jurusan' => $this->request->getPost('jurusan'),
		];

		$this->jurusanModel->insert($data);
		$this->session->setFlashdata('success', 'Data Jurusan Berhasil Ditambahkan.');
		return redirect()->to('/admin/jurusan');
	}

	public function edit($id)
	{
		return view('admin/jurusan/edit', [
			'title' => 'Edit Data Jurusan',
			'jurusan' => $this->jurusanModel->find($id),
		]);
	}

	public function update($id)
	{
		$data = [
		    'jurusan' => $this->request->getPost('jurusan'),
		];

		$this->jurusanModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Jurusan Berhasil Diubah.');
		return redirect()->to('/admin/jurusan');
	}

	public function delete($id)
	{
		$this->jurusanModel->delete($id);
		$this->session->setFlashdata('success', 'Data Jurusan Berhasil Dihapus.');
		return redirect()->to('/admin/jurusan');
	}
}
