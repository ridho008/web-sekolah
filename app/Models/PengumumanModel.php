<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
	protected $table                = 'pengumuman';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['judul_pengumuman', 'isi_pengumuman', 'foto_pengumuman'];
}
