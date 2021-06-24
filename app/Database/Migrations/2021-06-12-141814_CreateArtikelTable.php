<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArtikelTable extends Migration
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
         'judul' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
         ],
         'isi' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'foto_artikel' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('artikel');
	}

	public function down()
	{
		$this->forge->dropTable('artikel');
	}
}
