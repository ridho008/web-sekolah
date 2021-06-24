<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
	protected $table                = 'galeri';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama_galeri', 'foto_galeri'];
}
