<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;

class Artikel extends BaseController
{
	public function __construct()
	{
		$this->artikelModel = new ArtikelModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/artikel/index', [
			'title' => 'Artikel',
			'artikel' => $this->artikelModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/artikel/create', [
			'title' => 'Tambah Data Artikel'
		]);
	}

	public function create()
	{
		$foto = $this->request->getFile('foto_artikel');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/artikel', $newName);
		}
		$data = [
		    'judul' => $this->request->getPost('judul'),
		    'isi' => $this->request->getPost('isi'),
		    'foto_artikel' => $newName,
		];

		$this->artikelModel->insert($data);
		$this->session->setFlashdata('success', 'Data Artikel Berhasil Ditambahkan.');
		return redirect()->to('/admin/artikel');
	}

	public function edit($id)
	{
		return view('admin/artikel/edit', [
			'title' => 'Edit Data Artikel',
			'artikel' => $this->artikelModel->find($id),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('foto_artikel');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/artikel', $newName);
			unlink('img/artikel/'.$this->request->getPost('foto_artikel_lama'));
		} else {
			$newName = $this->request->getPost('foto_artikel_lama');
		}

		$data = [
		    'judul' => $this->request->getPost('judul'),
		    'isi' => $this->request->getPost('isi'),
		    'foto_artikel' => $newName,
		];

		$this->artikelModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Artikel Berhasil Diubah.');
		return redirect()->to('/admin/artikel');
	}

	public function delete($id)
	{
		$artikel = $this->artikelModel->find($id);
		unlink('img/artikel/'.$artikel['foto_artikel']);
		$this->artikelModel->delete($id);
		$this->session->setFlashdata('success', 'Data Artikel Berhasil Dihapus.');
		return redirect()->to('/admin/artikel');
	}
}
