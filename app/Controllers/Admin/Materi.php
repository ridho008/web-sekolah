<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MateriModel;

class Materi extends BaseController
{
	public function __construct()
	{
		$this->materiModel = new MateriModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/materi/index', [
			'title' => 'Materi',
			'materi' => $this->materiModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/materi/create', [
			'title' => 'Tambah Data Materi'
		]);
	}

	public function create()
	{
		$foto = $this->request->getFile('upload_materi');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/materi', $newName);
		}
		$data = [
		    'materi' => $this->request->getPost('materi'),
		    'upload_materi' => $newName,
		];

		$this->materiModel->insert($data);
		$this->session->setFlashdata('success', 'Data Materi Berhasil Ditambahkan.');
		return redirect()->to('/admin/materi');
	}

	public function edit($id)
	{
		return view('admin/materi/edit', [
			'title' => 'Edit Data Materi',
			'materi' => $this->materiModel->find($id),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('upload_materi');
		if ($foto->isValid())
		{
			$newName = time().$foto->getName();
			$foto->move('img/materi', $newName);
			unlink('img/materi/'.$this->request->getPost('upload_materi_lama'));
		} else {
			$newName = $this->request->getPost('upload_materi_lama');
		}

		$data = [
		    'materi' => $this->request->getPost('materi'),
		    'upload_materi' => $newName,
		];

		$this->materiModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Materi Berhasil Diubah.');
		return redirect()->to('/admin/materi');
	}

	public function delete($id)
	{
		$materi = $this->materiModel->find($id);
		unlink('img/materi/'.$materi['upload_materi']);
		$this->materiModel->delete($id);
		$this->session->setFlashdata('success', 'Data materi Berhasil Dihapus.');
		return redirect()->to('/admin/materi');
	}
}
