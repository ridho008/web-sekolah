<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use \App\Models\UserModel;

class Users extends BaseController
{
	public function __construct()
	{
		$this->userModel = new \App\Models\UserModel;
		$this->session = session();
		helper('form');
	}

	public function index()
	{
		return view('admin/users/index', [
			'title' => 'Users',
			'users' => $this->userModel->findAll(),
		]);
	}

	public function new()
	{
		return view('admin/users/create', [
			'title' => 'Tambah Data User'
		]);
	}

	public function create()
	{
		$data = [
		    'email' => $this->request->getPost('email'),
		    'username' => $this->request->getPost('username'),
		    'password' => $this->request->getPost('password'),
		    'nama' => $this->request->getPost('nama'),
		    'roles' => $this->request->getPost('roles'),
		];

		$this->userModel->insert($data);
		$this->session->setFlashdata('success', 'Data User Berhasil Ditambahkan.');
		return redirect()->to('/admin/users');
	}

	public function edit($id)
	{
		return view('admin/users/edit', [
			'title' => 'Edit Data User',
			'user' => $this->userModel->find($id),
		]);
	}

	public function update($id)
	{
		$data = [
		    'email' => $this->request->getPost('email'),
		    'username' => $this->request->getPost('username'),
		    'password' => $this->request->getPost('password'),
		    'nama' => $this->request->getPost('nama'),
		    'roles' => $this->request->getPost('roles'),
		];

		$this->userModel->update($id, $data);
		$this->session->setFlashdata('success', 'Data User Berhasil Diubah.');
		return redirect()->to('/admin/users');
	}

	public function delete($id)
	{
		$this->userModel->delete($id);
		$this->session->setFlashdata('success', 'Data User Berhasil Dihapus.');
		return redirect()->to('/admin/users');
	}
}
