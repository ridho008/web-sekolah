<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKepsekTable extends Migration
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
               'nama_kepsek' => [
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'null' => true,
               ],
               'kata_sambutan'       => [
                       'type'       => 'TEXT',
                       'null' => true,
               ],
               'foto_kepsek' => [
                       'type' => 'VARCHAR',
                       'constraint' => '255',
                       'null' => true,
               ],
       ]);
       $this->forge->addKey('id', true);
       $this->forge->createTable('kepsek');
	}

	public function down()
	{
		$this->forge->dropTable('kepsek');
	}
}
