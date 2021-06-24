<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKontakTable extends Migration
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
         'nama' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
         'email' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
         'isi' => [
            'type' => 'TEXT',
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('kontak');
	}

	public function down()
	{
		$this->forge->dropTable('kontak');
	}
}
