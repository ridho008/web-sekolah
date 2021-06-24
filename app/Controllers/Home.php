<?php

namespace App\Controllers;
use App\Models\KepsekModel;
use App\Models\FasilitasModel;
use App\Models\ArtikelModel;
use App\Models\PengaturanwebModel;
use App\Models\EkstrakurikulerModel;
use App\Models\GaleriModel;
use App\Models\MateriModel;
use App\Models\PengumumanModel;
use App\Models\KontakModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->kepsekModel = new KepsekModel;
		$this->fasilitasModel = new FasilitasModel;
		$this->beritaModel = new ArtikelModel;
		$this->settingModel = new PengaturanwebModel;
		$this->ekstraModel = new EkstrakurikulerModel;
		$this->galeriModel = new GaleriModel;
		$this->materiModel = new MateriModel;
		$this->pengumumanModel = new PengumumanModel;
		$this->kontakModel = new KontakModel;
		$this->session = session();
	}

	public function index()
	{
		return view('layouts/content-frontend', [
			'title' => 'SMAN 1 Rangsang',
			'kepsek' => $this->kepsekModel->first(),
			'fasilitas' => $this->fasilitasModel->find([1, 2, 3]),
			'berita' => $this->beritaModel->find([1, 2, 3]),
			'setting' => $this->settingModel->first(),
			'ekstra' => $this->ekstraModel->findAll(),
			'info' => $this->pengumumanModel->first(),
		]);
	}

	public function galeri()
	{
		return view('layouts/page/galeri', [
			'title' => 'Galeri | SMAN 1 Rangsang',
			'setting' => $this->settingModel->first(),
			'galeri' => $this->galeriModel->findAll(),
			'info' => $this->pengumumanModel->first(),
			'berita' => $this->beritaModel->find([1, 2, 3]),
			'fasilitas' => $this->fasilitasModel->find([1, 2, 3]),
			'ekstra' => $this->ekstraModel->findAll(),
			// 'materi' => $this->materiModel->findAll(),
		]);
	}

	public function materi()
	{
		return view('layouts/page/materi', [
			'title' => 'Materi | SMAN 1 Rangsang',
			'setting' => $this->settingModel->first(),
			'materi' => $this->materiModel->findAll(),
			'info' => $this->pengumumanModel->first(),
			'berita' => $this->beritaModel->find([1, 2, 3]),
			'fasilitas' => $this->fasilitasModel->find([1, 2, 3]),
			'ekstra' => $this->ekstraModel->findAll(),
		]);
	}

	public function lihat($id)
	{
		$materi = $this->materiModel->find($id);
		return view('layouts/page/lihat-pdf', [
			'materi' => $materi,
		]);
	}

	public function pengumuman()
	{
		return view('layouts/page/pengumuman', [
			'title' => 'Pengumuman | SMAN 1 Rangsang',
			'setting' => $this->settingModel->first(),
			'info' => $this->pengumumanModel->first(),
			'berita' => $this->beritaModel->find([1, 2, 3]),
			'fasilitas' => $this->fasilitasModel->find([1, 2, 3]),
			'ekstra' => $this->ekstraModel->findAll(),
		]);
	}

	public function kirim_pesan()
	{
		$data = [
			'nama' => $this->request->getPost('nama'),
			'email' => $this->request->getPost('email'),
			'isi' => $this->request->getPost('isi'),
		];

		$this->kontakModel->insert($data);
		return redirect()->to('/');
	}

	public function berita($id)
	{
		$berita = $this->beritaModel->find($id);
		return view('layouts/page/berita', [
			'title' =>  $berita['judul'] . '| SMAN 1 Rangsang',
			'berita' => $berita,
			'setting' => $this->settingModel->first(),
			'info' => $this->pengumumanModel->first(),
			'berita' => $this->beritaModel->find([1, 2, 3]),
			'fasilitas' => $this->fasilitasModel->find([1, 2, 3]),
			'ekstra' => $this->ekstraModel->findAll(),
		]);
	}

	public function tentang()
	{
		return view('layouts/page/tentang', [
			'title' =>  'Tentang Kami | SMAN 1 Rangsang',
			'setting' => $this->settingModel->first(),
			'info' => $this->pengumumanModel->first(),
			'berita' => $this->beritaModel->find([1, 2, 3]),
			'fasilitas' => $this->fasilitasModel->find([1, 2, 3]),
			'ekstra' => $this->ekstraModel->findAll(),
		]);
	}
}
