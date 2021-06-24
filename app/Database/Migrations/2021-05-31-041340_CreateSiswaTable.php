<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiswaTable extends Migration
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
               'nisn' => [
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'null' => true,
               ],
               'nama_siswa' => [
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'null' => true,
               ],
               'tmp_lahir' => [
                       'type' => 'VARCHAR',
                       'constraint' => '255',
                       'null' => true,
               ],
               'tgl_lahir' => [
                       'type' => 'DATE',
                       'null' => true,
               ],
               'jk_siswa' => [
                       'type' => 'VARCHAR',
                       'constraint' => '255',
                       'null' => true,
               ],
               'no_telp' => [
                       'type' => 'VARCHAR',
                       'constraint' => '255',
                       'null' => true,
               ],
               'alamat' => [
                       'type' => 'TEXT',
                       'null' => true,
               ],
       ]);
       $this->forge->addKey('id', true);
       $this->forge->createTable('siswa');
	}

	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}
