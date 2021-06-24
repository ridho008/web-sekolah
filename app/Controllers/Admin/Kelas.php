<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\JurusanModel;

class Kelas extends BaseController
{
	public function __construct()
	{
		$this->kelasModel = new KelasModel;
		$this->jurusanModel = new JurusanModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/kelas/index', [
			'title' => 'Kelas',
			'kelas' => $this->kelasModel->getJoinKelasToJurusan(),
		]);
	}

	public function new()
	{
		return view('admin/kelas/create', [
			'title' => 'Tambah Data Kelas',
			'jurusans' => $this->jurusanModel->findAll(),
		]);
	}

	public function create()
	{
		$data = [
		    'nama_kelas' => $this->request->getPost('nama_kelas'),
		    'id_jurusan' => $this->request->getPost('id_jurusan'),
		    'kouta' => $this->request->getPost('kouta'),
		    'jml_kelas' => $this->request->getPost('jml_kelas'),
		];

		$this->kelasModel->insert($data);
		$this->session->setFlashdata('success', 'Data Kelas Berhasil Ditambahkan.');
		return redirect()->to('/admin/kelas');
	}

	public function edit($id)
	{
		return view('admin/kelas/edit', [
			'title' => 'Edit Data Kelas',
			'kelas' => $this->kelasModel->find($id),
			'jurusans' => $this->jurusanModel->findAll(),
		]);
	}

	public function update($id)
	{
		$data = [
		    'nama_kelas' => $this->request->getPost('nama_kelas'),
		    'id_jurusan' => $this->request->getPost('id_jurusan'),
		    'kouta' => $this->request->getPost('kouta'),
		    'jml_kelas' => $this->request->getPost('jml_kelas'),
		];

		$this->kelasModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Kelas Berhasil Diubah.');
		return redirect()->to('/admin/kelas');
	}

	public function delete($id)
	{
		$this->kelasModel->delete($id);
		$this->session->setFlashdata('success', 'Data Kelas Berhasil Dihapus.');
		return redirect()->to('/admin/kelas');
	}
}
