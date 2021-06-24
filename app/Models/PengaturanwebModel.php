<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaturanwebModel extends Model
{
	protected $table                = 'pengaturan_web';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama_website', 'visi', 'misi', 'no_telp', 'no_whatsapp', 'alamat', 'logo_sekolah', 'logo_akreditasi', 'logo_wilayah', 'logo_kabupaten', 'email', 'facebook', 'twitter', 'instagram'];
}
