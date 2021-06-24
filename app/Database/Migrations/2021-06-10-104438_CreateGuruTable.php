<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuruTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
               'id'          => [
                       'type'           => 'INT',
                       'constraint'     => 5,
                       'unsigned'       => true,
                       'auto_increment' => true,
               ],
               'nidn' => [
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'null' => true,
               ],
               'nama_guru' => [
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'null' => true,
               ],
               'email'       => [
                       'type'       => 'TEXT',
                       'null' => true,
               ],
               'foto_guru' => [
                       'type' => 'VARCHAR',
                       'constraint' => '255',
                       'null' => true,
               ],
       ]);
       $this->forge->addKey('id', true);
       $this->forge->createTable('guru');
	}

	public function down()
	{
		$this->forge->dropTable('guru');
	}
}
