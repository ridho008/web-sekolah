<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EkstrakurikulerModel;

class Ekstrakurikuler extends BaseController
{
	public function __construct()
	{
		$this->ekstraModel = new EkstrakurikulerModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/ekstrakurikuler/index', [
			'title' => 'Ekstrakurikuler',
			'ekstrakurikuler' => $this->ekstraModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/ekstrakurikuler/create', [
			'title' => 'Tambah Data Ekstrakurikuler'
		]);
	}

	public function create()
	{
		$foto = $this->request->getFile('foto_ekstrakurikuler');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/ekstrakurikuler', $newName);
		}
		$data = [
		    'ekstrakurikuler' => $this->request->getPost('ekstrakurikuler'),
		    'isi' => $this->request->getPost('deskripsi'),
		    'foto_ekstrakurikuler' => $newName,
		];

		$this->ekstraModel->insert($data);
		$this->session->setFlashdata('success', 'Data Ekstrakurikuler Berhasil Ditambahkan.');
		return redirect()->to('/admin/ekstrakurikuler');
	}

	public function edit($id)
	{
		return view('admin/ekstrakurikuler/edit', [
			'title' => 'Edit Data Ekstrakurikuler',
			'ekstrakurikuler' => $this->ekstraModel->find($id),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('foto_ekstrakurikuler');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/ekstrakurikuler', $newName);
			unlink('img/ekstrakurikuler/'.$this->request->getPost('foto_ekstrakurikuler_lama'));
		} else {
			$newName = $this->request->getPost('foto_ekstrakurikuler_lama');
		}

		$data = [
		    'ekstrakurikuler' => $this->request->getPost('ekstrakurikuler'),
		    'isi' => $this->request->getPost('deskripsi'),
		    'foto_ekstrakurikuler' => $newName,
		];

		$this->ekstraModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Ekstrakurikuler Berhasil Diubah.');
		return redirect()->to('/admin/ekstrakurikuler');
	}

	public function delete($id)
	{
		$ekstrakurikuler = $this->ekstraModel->find($id);
		unlink('img/ekstrakurikuler/'.$ekstrakurikuler['foto_ekstrakurikuler']);
		$this->ekstraModel->delete($id);
		$this->session->setFlashdata('success', 'Data Ekstrakurikuler Berhasil Dihapus.');
		return redirect()->to('/admin/ekstrakurikuler');
	}
}
