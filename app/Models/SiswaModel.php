<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
	protected $table                = 'siswa';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nisn', 'nama_siswa', 'tmp_lahir', 'tgl_lahir', 'jk_siswa', 'no_telp', 'alamat'];

	public function createSiswa($data)
	{
		$this->db->table('siswa')
					->insert($data);
	}
}
