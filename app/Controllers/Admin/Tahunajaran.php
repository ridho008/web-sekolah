<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use \App\Models\TahunajaranModel;

class Tahunajaran extends BaseController
{
	public function __construct()
	{
		$this->tahunModel = new TahunajaranModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/tahun-ajaran/index', [
			'title' => 'Tahun Ajaran',
			'tahun' => $this->tahunModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/tahun-ajaran/create', [
			'title' => 'Tambah Data Tahun Ajaran'
		]);
	}

	public function create()
	{
		$data = [
		    'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
		    'status' => $this->request->getPost('status'),
		];

		$this->tahunModel->insert($data);
		$this->session->setFlashdata('success', 'Data Tahun Berhasil Ditambahkan.');
		return redirect()->to('/admin/tahunajaran');
	}

	public function edit($id)
	{
		return view('admin/tahun-ajaran/edit', [
			'title' => 'Edit Data Tahun Ajaran',
			'tahun' => $this->tahunModel->find($id),
		]);
	}

	public function update($id)
	{
		$data = [
		    'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
		    'status' => $this->request->getPost('status'),
		];

		$this->tahunModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Tahun Berhasil Diubah.');
		return redirect()->to('/admin/tahunajaran');
	}

	public function delete($id)
	{
		$this->tahunModel->delete($id);
		$this->session->setFlashdata('success', 'Data Tahun Berhasil Dihapus.');
		return redirect()->to('/admin/tahunajaran');
	}

	public function active($id)
	{
		$this->tahunModel->resetStatus();
		$data = [
			'status' => 1
		];

		$this->tahunModel->activeStatus($data, $id);
		session()->setFlashdata('success', 'Tahun Akademik Berhasil Diaktifkan.');
		return redirect()->to('/admin/tahunajaran');
	}
}
