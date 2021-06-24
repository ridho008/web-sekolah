<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->userModel = new UserModel;
		$this->session = session();
	}

	public function index()
	{
		if($this->session->get('logged_in')) {
			return redirect()->to('/admin/dashboard');
		}
		return view('auth/login');
	}

	public function login()
	{
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');

		$cekLogin = $this->userModel->where('email', $email)->get()->getRowArray();
		if($cekLogin != null) {
			$data = [
				'id' => $cekLogin['id'],
				'logged_in' => TRUE
			];
			$this->session->set($data);
			return redirect()->to('/admin/dashboard');
		} else {
			$this->session->setFlashdata('danger', 'Email tidak terdaftar.');
			return redirect()->to('/auth');
		}
	}

	public function logout()
	{
		session()->remove('id');
		session()->remove('logged_in');
		session()->setFlashdata('success', 'Berhasil Logout.');
		return redirect()->to('/auth');
	}
}
