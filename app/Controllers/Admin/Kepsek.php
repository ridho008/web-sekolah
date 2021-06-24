<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use \App\Models\KepsekModel;

class Kepsek extends BaseController
{
	public function __construct()
	{
		$this->kepsekModel = new KepsekModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/kepsek/index', [
			'title' => 'Kepala Sekolah',
			'kepsek' => $this->kepsekModel->find(1),
		]);
	}

	public function update($id)
	{
		$foto = $this->request->getFile('foto_kepsek');
		if ($foto->isValid())
		{
			$name = $foto->getName();
		   $newName = $foto->getRandomName();
			$foto->move('img/kepsek', $newName);
			unlink('img/kepsek/'.$this->request->getPost('foto_kepsek_lama'));
		} else {
			$newName = $this->request->getPost('foto_kepsek_lama');
		}
		$data = [
		    'nama_kepsek' => $this->request->getPost('nama_kepsek'),
		    'kata_sambutan' => $this->request->getPost('kata_sambutan'),
		    'foto_kepsek' => $newName,
		];

		$this->kepsekModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Kepsek Berhasil Diubah.');
		return redirect()->to('/admin/kepsek');
	}
}
