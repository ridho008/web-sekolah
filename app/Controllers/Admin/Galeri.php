<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class Galeri extends BaseController
{
	public function __construct()
	{
		$this->galeriModel = new GaleriModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/galeri/index', [
			'title' => 'Galeri',
			'galeri' => $this->galeriModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/galeri/create', [
			'title' => 'Tambah Data Galeri'
		]);
	}

	public function create()
	{
		$foto = $this->request->getFile('foto_galeri');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/galeri', $newName);
		}
		$data = [
		    'nama_galeri' => $this->request->getPost('nama_galeri'),
		    'foto_galeri' => $newName,
		];

		$this->galeriModel->insert($data);
		$this->session->setFlashdata('success', 'Data Galeri Berhasil Ditambahkan.');
		return redirect()->to('/admin/galeri');
	}

	public function edit($id)
	{
		return view('admin/galeri/edit', [
			'title' => 'Edit Data Galeri',
			'galeri' => $this->galeriModel->find($id),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('foto_galeri');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/galeri', $newName);
			unlink('img/galeri/'.$this->request->getPost('foto_galeri_lama'));
		} else {
			$newName = $this->request->getPost('foto_galeri_lama');
		}

		$data = [
		    'nama_galeri' => $this->request->getPost('nama_galeri'),
		    'foto_galeri' => $newName,
		];

		$this->galeriModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Galeri Berhasil Diubah.');
		return redirect()->to('/admin/galeri');
	}

	public function delete($id)
	{
		$galeri = $this->galeriModel->find($id);
		unlink('img/galeri/'.$galeri['foto_galeri']);
		$this->galeriModel->delete($id);
		$this->session->setFlashdata('success', 'Data Galeri Berhasil Dihapus.');
		return redirect()->to('/admin/galeri');
	}
}
