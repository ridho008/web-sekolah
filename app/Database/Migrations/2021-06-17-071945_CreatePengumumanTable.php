<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengumumanTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
         'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
         ],
         'judul_pengumuman' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
         'isi_pengumuman' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'foto_pengumuman' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('pengumuman');
	}

	public function down()
	{
		$this->forge->dropTable('pengumuman');
	}
}
