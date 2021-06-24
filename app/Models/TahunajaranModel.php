<?php

namespace App\Models;

use CodeIgniter\Model;

class TahunajaranModel extends Model
{
	protected $table                = 'tahun_ajaran';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['tahun_ajaran', 'status'];

	public function activeStatus($data, $id)
   {
      $db      = \Config\Database::connect();
      $builder = $db->table('tahun_ajaran');
      $builder->set('status', 1);
      $builder->where('id', $id);
      $builder->update($data);
   }

   public function resetStatus()
   {
      $this->db->table('tahun_ajaran')->update(['status' => null]);
   }
}
