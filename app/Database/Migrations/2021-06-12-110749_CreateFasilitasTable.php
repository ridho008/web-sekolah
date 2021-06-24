<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFasilitasTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
         'id' => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
         ],
         'fasilitas' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
         ],
         'deskripsi' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'foto_fasilitas' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('fasilitas');
	}

	public function down()
	{
		$this->forge->dropTable('fasilitas');
	}
}
