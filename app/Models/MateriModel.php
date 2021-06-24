<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
	protected $table                = 'materi';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['materi', 'upload_materi'];
}
