<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
	public function __construct()
	{
		$this->pengumumanModel = new PengumumanModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/pengumuman/index', [
			'title' => 'Pengumuman',
			'pengumuman' => $this->pengumumanModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/pengumuman/create', [
			'title' => 'Tambah Data Pengumuman'
		]);
	}

	public function create()
	{
		$foto = $this->request->getFile('foto_pengumuman');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/pengumuman', $newName);
		}
		$data = [
		    'judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
		    'isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
		    'foto_pengumuman' => $newName,
		];

		$this->pengumumanModel->insert($data);
		$this->session->setFlashdata('success', 'Data Pengumuman Berhasil Ditambahkan.');
		return redirect()->to('/admin/pengumuman');
	}

	public function edit($id)
	{
		return view('admin/pengumuman/edit', [
			'title' => 'Edit Data Pengumuman',
			'pengumuman' => $this->pengumumanModel->find($id),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('foto_pengumuman');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/pengumuman', $newName);
			unlink('img/pengumuman/'.$this->request->getPost('foto_pengumuman_lama'));
		} else {
			$newName = $this->request->getPost('foto_pengumuman_lama');
		}

		$data = [
		    'judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
		    'isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
		    'foto_pengumuman' => $newName,
		];

		$this->pengumumanModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Pengumuman Berhasil Diubah.');
		return redirect()->to('/admin/pengumuman');
	}

	public function delete($id)
	{
		$pengumuman = $this->pengumumanModel->find($id);
		unlink('img/pengumuman/'.$pengumuman['foto_pengumuman']);
		$this->pengumumanModel->delete($id);
		$this->session->setFlashdata('success', 'Data pengumuman Berhasil Dihapus.');
		return redirect()->to('/admin/pengumuman');
	}
}
