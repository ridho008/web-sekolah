<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FasilitasModel;

class Fasilitas extends BaseController
{
	public function __construct()
	{
		$this->fasilitasModel = new FasilitasModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/fasilitas/index', [
			'title' => 'Fasilitas',
			'fasilitas' => $this->fasilitasModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/fasilitas/create', [
			'title' => 'Tambah Data Fasilitas'
		]);
	}

	public function create()
	{
		$foto = $this->request->getFile('foto_fasilitas');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/fasilitas', $newName);
		}
		$data = [
		    'fasilitas' => $this->request->getPost('fasilitas'),
		    'deskripsi' => $this->request->getPost('deskripsi'),
		    'foto_fasilitas' => $newName,
		];

		$this->fasilitasModel->insert($data);
		$this->session->setFlashdata('success', 'Data Fasilitas Berhasil Ditambahkan.');
		return redirect()->to('/admin/fasilitas');
	}

	public function edit($id)
	{
		return view('admin/fasilitas/edit', [
			'title' => 'Edit Data Fasilitas',
			'fasilitas' => $this->fasilitasModel->find($id),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('foto_fasilitas');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/fasilitas', $newName);
			unlink('img/fasilitas/'.$this->request->getPost('foto_fasilitas_lama'));
		} else {
			$newName = $this->request->getPost('foto_fasilitas_lama');
		}

		$data = [
		    'fasilitas' => $this->request->getPost('fasilitas'),
		    'deskripsi' => $this->request->getPost('deskripsi'),
		    'foto_fasilitas' => $newName,
		];

		$this->fasilitasModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Fasilitas Berhasil Diubah.');
		return redirect()->to('/admin/fasilitas');
	}

	public function delete($id)
	{
		$fasilitas = $this->fasilitasModel->find($id);
		unlink('img/fasilitas/'.$fasilitas['foto_fasilitas']);
		$this->fasilitasModel->delete($id);
		$this->session->setFlashdata('success', 'Data Fasilitas Berhasil Dihapus.');
		return redirect()->to('/admin/fasilitas');
	}
}
