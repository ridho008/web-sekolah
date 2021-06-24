<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use \App\Models\GuruModel;

class Guru extends BaseController
{
	public function __construct()
	{
		$this->guruModel = new GuruModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/guru/index', [
			'title' => 'Guru',
			'gurus' => $this->guruModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/guru/create', [
			'title' => 'Tambah Data Guru'
		]);
	}

	public function create()
	{
		$foto = $this->request->getFile('foto_guru');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/guru', $newName);
		} else {
			$newName = "default.jpg";
		}
		$data = [
		    'nidn' => $this->request->getPost('nidn'),
		    'nama_guru' => $this->request->getPost('nama_guru'),
		    'email' => $this->request->getPost('email'),
		    'foto_guru' => $newName,
		];

		$this->guruModel->insert($data);
		$this->session->setFlashdata('success', 'Data Guru Berhasil Ditambahkan.');
		return redirect()->to('/admin/guru');
	}

	public function edit($id)
	{
		return view('admin/guru/edit', [
			'title' => 'Edit Data Guru',
			'guru' => $this->guruModel->find($id),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('foto_guru');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/guru', $newName);
			unlink('img/guru/'.$this->request->getPost('foto_guru_lama'));
		} else {
			$newName = $this->request->getPost('foto_guru_lama');
		}

		$data = [
		    'nidn' => $this->request->getPost('nidn'),
		    'nama_guru' => $this->request->getPost('nama_guru'),
		    'email' => $this->request->getPost('email'),
		    'foto_guru' => $newName,
		];

		$this->guruModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Guru Berhasil Diubah.');
		return redirect()->to('/admin/guru');
	}

	public function delete($id)
	{
		$guru = $this->guruModel->find($id);
		if($guru['foto_guru'] != 'default.jpg') {
			unlink('img/guru/'.$guru['foto_guru']);
		}
		$this->guruModel->delete($id);
		$this->session->setFlashdata('success', 'Data Guru Berhasil Dihapus.');
		return redirect()->to('/admin/guru');
	}
}
