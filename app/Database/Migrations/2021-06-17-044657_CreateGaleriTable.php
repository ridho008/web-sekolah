<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGaleriTable extends Migration
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
         'nama_galeri' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
         'foto_galeri' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('galeri');
	}

	public function down()
	{
		$this->forge->dropTable('galeri');
	}
}
