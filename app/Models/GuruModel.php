<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
	protected $table                = 'guru';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nidn', 'nama_guru', 'email', 'foto_guru'];

	
}
