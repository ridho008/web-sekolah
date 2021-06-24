<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
	protected $table                = 'kelas';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama_kelas', 'id_jurusan', 'kouta', 'jml_kelas'];

	public function getJoinKelasToJurusan()
	{
		return $this->db->table('jurusan')
					->select('*')
					->join('kelas', 'kelas.id_jurusan = jurusan.id')
					->get()->getResultArray();
	}
}
