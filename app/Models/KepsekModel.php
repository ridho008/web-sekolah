<?php

namespace App\Models;

use CodeIgniter\Model;

class KepsekModel extends Model
{
	protected $table                = 'kepsek';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama_kepsek', 'kata_sambutan', 'foto_kepsek'];
}
