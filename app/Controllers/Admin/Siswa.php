<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
	public function __construct()
	{
		$this->siswaModel = new \App\Models\SiswaModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/siswa/index', [
			'title' => 'Siswa',
			'siswas' => $this->siswaModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/siswa/create', [
			'title' => 'Tambah Data Siswa'
		]);
	}

	public function create()
	{
		$data = [
		    'nisn' => $this->request->getPost('nisn'),
		    'nama_siswa' => $this->request->getPost('nama_siswa'),
		    'tmp_lahir' => $this->request->getPost('tmp_lahir'),
		    'tgl_lahir' => $this->request->getPost('tgl_lahir'),
		    'jk_siswa' => $this->request->getPost('jk_siswa'),
		    'no_telp' => $this->request->getPost('no_telp'),
		    'alamat' => $this->request->getPost('alamat'),
		];

		$this->siswaModel->insert($data);
		$this->session->setFlashdata('success', 'Data Siswa Berhasil Ditambahkan.');
		return redirect()->to('/admin/siswa');
	}

	public function edit($id)
	{
		return view('admin/siswa/edit', [
			'title' => 'Edit Data Siswa',
			'siswa' => $this->siswaModel->find($id),
		]);
	}

	public function update($id)
	{
		$data = [
		    'nisn' => $this->request->getPost('nisn'),
		    'nama_siswa' => $this->request->getPost('nama_siswa'),
		    'tmp_lahir' => $this->request->getPost('tmp_lahir'),
		    'tgl_lahir' => $this->request->getPost('tgl_lahir'),
		    'jk_siswa' => $this->request->getPost('jk_siswa'),
		    'no_telp' => $this->request->getPost('no_telp'),
		    'alamat' => $this->request->getPost('alamat'),
		];

		$this->siswaModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Siswa Berhasil Diubah.');
		return redirect()->to('/admin/siswa');
	}

	public function delete($id)
	{
		$this->siswaModel->delete($id);
		$this->session->setFlashdata('success', 'Data Siswa Berhasil Dihapus.');
		return redirect()->to('/admin/siswa');
	}
}
