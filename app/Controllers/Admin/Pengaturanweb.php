<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengaturanwebModel;

class Pengaturanweb extends BaseController
{
	public function __construct()
	{
		$this->pengaturanModel = new PengaturanwebModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/pengaturan-web/index', [
			'title' => 'Pengaturan Website',
			'pengaturan' => $this->pengaturanModel->first(),
		]);
	}

	public function update($id)
	{
		// dd($this->request->getPost());
		// $logoSekolah = $this->request->getFile('logo_sekolah');
		// $logoAkreditasi = $this->request->getFile('logo_akreditasi');
		// if ($logoSekolah->isValid())
		// {
		// 	$name = $logoSekolah->getName();
		//    $logoSekolahBaru = $logoSekolah->getRandomName();
		// 	$logoSekolah->move('img/pengaturan', $logoSekolahBaru);
		// 	// unlink('img/pengaturan/'.$this->request->getPost('logo_sekolah_lama'));
		// } else if($logoAkreditasi->isValid()) {
		// 	$name = $logoAkreditasi->getName();
		//    $logoAkreditasiBaru = $logoAkreditasi->getRandomName();
		// 	$logoAkreditasi->move('img/pengaturan', $logoAkreditasiBaru);
		// 	// unlink('img/pengaturan/'.$this->request->getPost('logo_akreditasi_lama'));
		// } else {
		// 	if (!$logoSekolah->isValid()) {
		// 			$logoSekolahBaru = $this->request->getPost('logo_sekolah_lama');
		// 	}
		// }

		$logoSekolah = $this->request->getFile('logo_sekolah');
		$logoAkreditasi = $this->request->getFile('logo_akreditasi');
		$logoWilayah = $this->request->getFile('logo_wilayah');
		$logoKabupaten = $this->request->getFile('logo_kabupaten');
		if ($logoSekolah->isValid())
		{
			$name = $logoSekolah->getName();
		   $logoSekolahBaru = $logoSekolah->getRandomName();
			$logoSekolah->move('img/pengaturan', $logoSekolahBaru);
			unlink('img/pengaturan/'.$this->request->getPost('logo_sekolah_lama'));
		} else {
			$logoSekolahBaru = $this->request->getPost('logo_sekolah_lama');
		}

		if ($logoAkreditasi->isValid())
		{
			$name = $logoAkreditasi->getName();
		   $logoAkreditasiBaru = $logoAkreditasi->getRandomName();
			$logoAkreditasi->move('img/pengaturan', $logoAkreditasiBaru);
			unlink('img/pengaturan/'.$this->request->getPost('logo_akreditasi_lama'));
		} else {
			$logoAkreditasiBaru = $this->request->getPost('logo_akreditasi_lama');
		}

		if ($logoWilayah->isValid())
		{
			$name = $logoWilayah->getName();
		   $logoWilayahBaru = $logoWilayah->getRandomName();
			$logoWilayah->move('img/pengaturan', $logoWilayahBaru);
			unlink('img/pengaturan/'.$this->request->getPost('logo_wilayah_lama'));
		} else {
			$logoWilayahBaru = $this->request->getPost('logo_wilayah_lama');
		}

		if ($logoKabupaten->isValid())
		{
			$name = $logoKabupaten->getName();
		   $logoKabupatenBaru = $logoKabupaten->getRandomName();
			$logoKabupaten->move('img/pengaturan', $logoKabupatenBaru);
			unlink('img/pengaturan/'.$this->request->getPost('logo_kabupaten_lama'));
		} else {
			$logoKabupatenBaru = $this->request->getPost('logo_kabupaten_lama');
		}

		$data = [
		    'nama_website' => $this->request->getPost('nama_website'),
		    'visi' => $this->request->getPost('visi'),
		    'misi' => $this->request->getPost('misi'),
		    'no_telp' => $this->request->getPost('no_telp'),
		    'no_whatsapp' => $this->request->getPost('no_whatsapp'),
		    'alamat' => $this->request->getPost('alamat'),
		    'logo_sekolah' => $logoSekolahBaru,
		    'logo_akreditasi' => $logoAkreditasiBaru,
		    'logo_wilayah' => $logoWilayahBaru,
		    'logo_kabupaten' => $logoKabupatenBaru,
		    'email' => $this->request->getPost('email'),
		    'facebook' => $this->request->getPost('facebook'),
		    'twitter' => $this->request->getPost('twitter'),
		    'instagram' => $this->request->getPost('instagram'),
		];

		$this->pengaturanModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data Pengaturan Website Berhasil Di Update.');
		return redirect()->to('/admin/pengaturanweb');
	}
}
