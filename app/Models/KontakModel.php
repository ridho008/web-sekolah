<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
	protected $table                = 'kontak';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama', 'email', 'isi'];
}
