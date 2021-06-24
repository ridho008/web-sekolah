<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMateriTable extends Migration
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
         'materi' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
         'upload_materi' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('materi');
	}

	public function down()
	{
		$this->forge->dropTable('materi');
	}
}
