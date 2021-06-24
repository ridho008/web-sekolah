<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
               'email' => [
                       'type' => 'VARCHAR',
                       'constraint' => '100',
               ],
               'username'       => [
                       'type'       => 'VARCHAR',
                       'constraint' => '100',
               ],
               'password'       => [
                       'type'       => 'VARCHAR',
                       'constraint' => '255',
               ],
               'nama' => [
                       'type' => 'VARCHAR',
                       'constraint' => '100',
               ],
               'roles' => [
                       'type' => 'INT',
                       'constraint' => '11',
                       'null' => true,
               ],
       ]);
       $this->forge->addKey('id', true);
       $this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
