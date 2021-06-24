<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['id', 'email', 'username', 'password', 'nama', 'roles'];
	protected $useTimestamps = false;

	public function createUser($data)
	{
		$this->db->table('users')
					->insert($data);
	}
}
