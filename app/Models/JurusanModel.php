<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
	protected $table                = 'jurusan';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['jurusan'];
}
