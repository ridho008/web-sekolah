<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEkstrakurikulerTable extends Migration
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
         'ekstrakurikuler' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
         ],
         'isi' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'foto_ekstrakurikuler' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('ekstrakurikuler');
	}

	public function down()
	{
		$this->forge->dropTable('ekstrakurikuler');
	}
}
